"use client";

import {
    Dialog,
    DialogTrigger,
    DialogContent,
    DialogHeader,
    DialogTitle,
    DialogFooter,
} from "@/components/ui/dialog";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { useState } from "react";
import axios from "axios";
import { toast } from "sonner";

export default function AddDestinationDialog({ onHotelCreated }) {
    const [open, setOpen] = useState(false);
    const [formData, setFormData] = useState({
        name: "",
        description: "",
        location: "",
        // price: "",
        image: null,
    });
    const [isSubmitting, setIsSubmitting] = useState(false);

    const handleChange = (e) => {
        const { name, value, files } = e.target;
        setFormData((prev) => ({
            ...prev,
            [name]: files ? files[0] : value,
        }));
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        setIsSubmitting(true);

        const data = new FormData();
        data.append("name", formData.name);
        data.append("description", formData.description);
        data.append("location", formData.location);
        // data.append("price", formData.price);
        data.append("image", formData.image);

        try {
            const response = await axios.post(
                "http://localhost:8000/api/destinations",
                data,
                {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                }
            );

            toast.success("Destination created successfully!");

            setFormData({
                name: "",
                description: "",
                location: "",
                // price: "",
                image: null,
            });

            if (onHotelCreated) {
                onHotelCreated(response.data);
            }

            setOpen(false);
        } catch (error) {
            console.error("Error:", error);
            toast.error("Failed to create hotel. Please try again.");
        } finally {
            setIsSubmitting(false);
        }
    };

    return (
        <Dialog open={open} onOpenChange={setOpen}>
            <DialogTrigger asChild>
                <Button
                    className="bg-green-400 hover:bg-green-400 cursor-pointer"
                    onClick={() => setOpen(true)}
                >
                    Add Destination
                </Button>
            </DialogTrigger>
            <DialogContent className="sm:max-w-[500px]">
                <DialogHeader>
                    <DialogTitle>Add New Hotel</DialogTitle>
                </DialogHeader>

                <form onSubmit={handleSubmit} className="space-y-4">
                    <div>
                        <Label htmlFor="name">Hotel Name</Label>
                        <Input
                            name="name"
                            id="name"
                            value={formData.name}
                            onChange={handleChange}
                            required
                        />
                    </div>
                    <div>
                        <Label htmlFor="description">Description</Label>
                        <Input
                            name="description"
                            id="description"
                            value={formData.description}
                            onChange={handleChange}
                            required
                        />
                    </div>
                    <div>
                        <Label htmlFor="location">Location</Label>
                        <Input
                            name="location"
                            id="location"
                            value={formData.location}
                            onChange={handleChange}
                            required
                        />
                    </div>
                    {/* <div>
                        <Label htmlFor="price">Price</Label>
                        <Input
                            name="price"
                            id="price"
                            type="number"
                            value={formData.price}
                            onChange={handleChange}
                            required
                        />
                    </div> */}
                    <div>
                        <Label htmlFor="image">Image</Label>
                        <Input
                            name="image"
                            id="image"
                            type="file"
                            accept="image/*"
                            onChange={handleChange}
                            required
                        />
                    </div>
                    <DialogFooter>
                        <Button type="submit" disabled={isSubmitting}>
                            {isSubmitting ? "Submitting..." : "Submit"}
                        </Button>
                    </DialogFooter>
                </form>
            </DialogContent>
        </Dialog>
    );
}
