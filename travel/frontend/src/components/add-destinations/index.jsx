"use client";
import {
    AlertDialog,
    AlertDialogAction,
    AlertDialogCancel,
    AlertDialogContent,
    AlertDialogDescription,
    AlertDialogFooter,
    AlertDialogHeader,
    AlertDialogTitle,
    AlertDialogTrigger,
} from "@/components/ui/alert-dialog";
import { ComboboxDemo } from "../combobox";
import { useEffect, useState } from "react";
import axios from "axios";
import { useSearchParams } from "next/navigation";
import DestinationCard from "../destinationCard";
import { RevalidatePath } from "../sever-action";
import { CirclePlus, Plus } from "lucide-react";

export default function AddDestination() {
    const [selectedDestination, setSelectedDestination] = useState("");
    const [destinationRecords, setDestinationRecords] = useState([]);

    const searchParams = useSearchParams();
    const tripId = searchParams.get("trip_id");

    // console.log("Trip ID:", tripId);

    const fetchCreatedTrips = async () => {
        const tripDestiResponse = await axios.get(
            "http://localhost:8000/api/tripDestinations/" + 1
        );
        const destinationRecord = tripDestiResponse.data.data;
        // console.log(destinationRecord);
        setDestinationRecords(destinationRecord);
    };

    useEffect(() => {
        fetchCreatedTrips();
    }, []);

    const handleAdd = async () => {
        console.log(
            "Selected Destination:",
            selectedDestination.id,
            selectedDestination.name
        );
        // You can now send it to backend or use it as needed
        try {
            const response = await axios.post(
                "http://localhost:8000/api/tripDestinations",
                {
                    destination_id: selectedDestination.id,
                    trip_id: 1,
                }
            );
            RevalidatePath();

            console.log("Success:", response.data);
        } catch (error) {
            console.error("Error posting data:", error);
        }
    };

    return (
        <>
            <AlertDialog>
                <AlertDialogTrigger className="font-bold bg-green-400  py-2 pl-4 pr-4 text-white ml-2 cursor-pointer rounded">
                    <div className="flex">
                        <CirclePlus />
                        Add Destination
                    </div>
                </AlertDialogTrigger>
                <AlertDialogContent>
                    <AlertDialogHeader>
                        <AlertDialogTitle>Add Destination</AlertDialogTitle>
                        <AlertDialogDescription>
                            <ComboboxDemo
                                value={selectedDestination}
                                onChange={setSelectedDestination}
                            />
                        </AlertDialogDescription>
                    </AlertDialogHeader>
                    <AlertDialogFooter>
                        <AlertDialogCancel>Cancel</AlertDialogCancel>
                        <AlertDialogAction
                            className="font-bold bg-green-400 hover:bg-green-500 cursor-pointer"
                            onClick={handleAdd}
                        >
                            Add
                        </AlertDialogAction>
                    </AlertDialogFooter>
                </AlertDialogContent>
            </AlertDialog>

            <div className="">Destinations</div>
            {destinationRecords?.map((record, index) => {
                return (
                    <DestinationCard
                        key={record.id}
                        destination_id={record.destination_id}
                        index={index}
                    />
                );
            })}
        </>
    );
}
