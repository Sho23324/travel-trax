"use client";
import axios from "axios";
import { CircleX } from "lucide-react";
import { useEffect, useState } from "react";

export default function DestinationCard({ destination_id, index }) {
    const [destination, setDestination] = useState(null);

    const handleDelete = async () => {
        // try {
        //     await axios.delete(
        //         "http://localhost:8000/api/tripDestinations/destination" + destination_id
        //     );
        //     console.log("Deleted successfully:", destination_id);
        //     onDelete?.(destination_id); // Call the parent callback if provided
        // } catch (error) {
        //     console.error("Error deleting destination:", error);
        // }
        console.log(destination_id);
    };

    useEffect(() => {
        axios
            .get("http://localhost:8000/api/destinations/" + destination_id)
            .then((res) => setDestination(res.data.data))
            .catch((err) => console.error(err));
    }, [destination_id]);

    if (!destination) return <div>Loading...</div>;
    return (
        <div className="p-5">
            <div className="border p-5 flex justify-between items-center rounded shadow">
                <div>
                    {index + 1}. {destination.name}
                </div>
                <button
                    onClick={handleDelete}
                    className=" rounded-full hover:bg-gray-200 cursor-pointer"
                >
                    <CircleX />
                </button>
            </div>
        </div>
    );
}
