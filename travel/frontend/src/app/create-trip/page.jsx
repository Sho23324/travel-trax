"use client";

import { useState } from "react";
import axios from "axios";
import { format, differenceInDays } from "date-fns";
import { Input } from "@/components/ui/input";
import { Textarea } from "@/components/ui/textarea";
import { Button } from "@/components/ui/button";
import { Calendar } from "@/components/ui/calendar";
import {
    Popover,
    PopoverTrigger,
    PopoverContent,
} from "@/components/ui/popover";
import { redirect } from "next/dist/server/api-utils";
import { useRouter } from "next/navigation"; // or "next/router" in older Next.js

export default function TripForm() {
    const [title, setTitle] = useState("");
    const [description, setDescription] = useState("");
    const [price, setPrice] = useState("");
    const [imageUrl, setImageUrl] = useState("");
    const [startDate, setStartDate] = useState(null);
    const [endDate, setEndDate] = useState(null);
    const [openStart, setOpenStart] = useState(false);
    const [openEnd, setOpenEnd] = useState(false);
    const [loading, setLoading] = useState(false);

    const duration_days =
        startDate && endDate ? differenceInDays(endDate, startDate) + 1 : 0;

    const router = useRouter();
    const handleTripCreated = (tripId) => {
        router.push(`/add-destinations?trip_id=${tripId}`);
    };

    const handleSubmit = async () => {
        if (
            !title ||
            !description ||
            !price ||
            !imageUrl ||
            !startDate ||
            !endDate
        ) {
            alert("Please fill all fields");
            return;
        }

        try {
            setLoading(true);
            const res = await axios.post("http://localhost:8000/api/trips", {
                title: title,
                description: description,
                price: parseInt(price),
                duration_days: duration_days,
                start_date: format(startDate, "yyyy-MM-dd"),
                end_date: format(endDate, "yyyy-MM-dd"),
                image_url: imageUrl,
            });

            alert("Trip submitted!");
            handleTripCreated(res.data.data.id);
        } catch (err) {
            console.error(err);
            alert("Failed to submit trip");
        } finally {
            setLoading(false);
        }
    };

    return (
        <div className="max-w-md mx-auto p-4 space-y-4 mt-10">
            <h1 className="text-xl font-bold mb-2">Create a Trip</h1>

            <Input
                placeholder="Trip Title"
                value={title}
                onChange={(e) => setTitle(e.target.value)}
            />

            <Textarea
                placeholder="Trip Description"
                value={description}
                onChange={(e) => setDescription(e.target.value)}
            />

            <Input
                placeholder="Price (e.g., 299.99)"
                type="number"
                value={price}
                onChange={(e) => setPrice(e.target.value)}
            />

            <Input
                placeholder="Image URL"
                value={imageUrl}
                onChange={(e) => setImageUrl(e.target.value)}
            />

            <div className="flex space-x-2">
                {/* Start Date Picker */}
                <Popover open={openStart} onOpenChange={setOpenStart}>
                    <PopoverTrigger asChild>
                        <Button
                            variant="outline"
                            className="w-full justify-start text-left"
                        >
                            {startDate
                                ? format(startDate, "PPP")
                                : "Start Date"}
                        </Button>
                    </PopoverTrigger>
                    <PopoverContent className="w-auto p-0">
                        <Calendar
                            mode="single"
                            selected={startDate}
                            onSelect={(date) => {
                                setStartDate(date);
                                setOpenStart(false);
                            }}
                            initialFocus
                        />
                    </PopoverContent>
                </Popover>

                {/* End Date Picker */}
                <Popover open={openEnd} onOpenChange={setOpenEnd}>
                    <PopoverTrigger asChild>
                        <Button
                            variant="outline"
                            className="w-full justify-start text-left"
                        >
                            {endDate ? format(endDate, "PPP") : "End Date"}
                        </Button>
                    </PopoverTrigger>
                    <PopoverContent className="w-auto p-0">
                        <Calendar
                            mode="single"
                            selected={endDate}
                            onSelect={(date) => {
                                setEndDate(date);
                                setOpenEnd(false);
                            }}
                            initialFocus
                        />
                    </PopoverContent>
                </Popover>
            </div>

            {startDate && endDate && (
                <p className="text-sm text-muted-foreground">
                    Duration: {duration_days} day(s)
                </p>
            )}

            <Button
                onClick={handleSubmit}
                disabled={loading}
                className="w-full"
            >
                {loading ? "Submitting..." : "Create Trip"}
            </Button>
        </div>
    );
}
