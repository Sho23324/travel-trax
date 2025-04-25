"use client";
import axios from "axios";
import { useEffect, useState } from "react";

export default function Trips() {
    const [trips, setTrips] = useState([]);
    const fetchData = async () => {
        const response = await axios.get(
            "http://localhost:8000/api/trips/users/1"
        );
        const tripsData = await response.data.data;
        setTrips(tripsData);
    };
    useEffect(() => {
        fetchData();
    }, []);
    return (
        <div className="grid grid-cols-1 md:grid-cols-1 gap-6 mt-40 p-10">
            {trips.map((trip, index) => (
                <div key={index} className="bg-white p-4 rounded shadow">
                    <h3 className="text-xl font-bold">{trip.title}</h3>
                    <p className="text-gray-600">
                        Start Date: {trip.start_date}
                    </p>
                    <p className="text-gray-500">{trip.dates}</p>
                </div>
            ))}
        </div>
    );
}
