"use client";

import { useEffect, useState } from "react";
import { Button } from "@/components/ui/button";
import {
    Table,
    TableBody,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from "@/components/ui/table";
import axios from "axios";
import Image from "next/image";

import { toast } from "sonner";
import AddHotelDialog from "../ui/hotel-alert-dialog";

export default function AdminHotelsTable() {
    const [destinations, setDestinations] = useState([]);
    const [editHotelId, setEditHotelId] = useState(null);
    const [editFormData, setEditFormData] = useState({});

    useEffect(() => {
        const fetchData = async () => {
            const response = await axios.get(
                "http://localhost:8000/api/hotels"
            );
            setDestinations(response.data.data);
        };
        fetchData();
    }, []);

    const handleDelete = async (hotel_id) => {
        try {
            await axios.delete(`http://localhost:8000/api/hotels/${hotel_id}`);

            // Filter out the deleted hotel from the current state
            setDestinations((prev) =>
                prev.filter((hotel) => hotel.id !== hotel_id)
            );

            toast.success("Hotel deleted successfully!", {
                style: {
                    backgroundColor: "#4ade80",
                    color: "#fff",
                    padding: "12px 24px",
                },
            });
        } catch (error) {
            toast.error("Failed to delete hotel.");
        }
    };

    const handleEditClick = (hotel) => {
        setEditHotelId(hotel.id);
        setEditFormData({ ...hotel });
    };

    const handleEditChange = (e) => {
        console.log(e.target.value);
        const { name, value } = e.target;
        setEditFormData((prev) => ({ ...prev, [name]: value }));
    };

    const handleCancelEdit = () => {
        setEditHotelId(null);
        setEditFormData({});
    };

    const handleSaveEdit = async () => {
        try {
            const response = await axios.put(
                `http://localhost:8000/api/hotels/${editHotelId}`,
                editFormData
            );

            toast.success("Hotel updated successfully!", {
                style: {
                    backgroundColor: "#4ade80",
                    color: "#fff",
                    padding: "12px 24px",
                },
            });

            // Update the item in the local state
            setDestinations((prev) =>
                prev.map((hotel) =>
                    hotel.id === editHotelId
                        ? { ...hotel, ...editFormData }
                        : hotel
                )
            );

            setEditHotelId(null);
            setEditFormData({});
        } catch (error) {
            toast.error("Failed to update hotel.");
        }
    };

    return (
        <div className="p-6">
            <div className="flex justify-between">
                <h2 className="text-2xl font-bold mb-4">Hotels</h2>
                <AddHotelDialog />
            </div>
            <Table>
                <TableHeader>
                    <TableRow>
                        <TableHead>Id</TableHead>
                        <TableHead>Name</TableHead>
                        <TableHead>Description</TableHead>
                        <TableHead>Location</TableHead>
                        <TableHead>Price</TableHead>
                        <TableHead>Image</TableHead>
                        <TableHead className="text-right">Actions</TableHead>
                    </TableRow>
                </TableHeader>
                <TableBody>
                    {destinations.map((item) => (
                        <TableRow key={item.id}>
                            <TableCell>{item.id}</TableCell>
                            <TableCell>
                                {editHotelId === item.id ? (
                                    <input
                                        name="name"
                                        value={editFormData.name}
                                        onChange={handleEditChange}
                                        className="border rounded p-1"
                                    />
                                ) : (
                                    item.name
                                )}
                            </TableCell>
                            <TableCell>
                                {editHotelId === item.id ? (
                                    <input
                                        name="description"
                                        value={editFormData.description}
                                        onChange={handleEditChange}
                                        className="border rounded p-1"
                                    />
                                ) : (
                                    item.description
                                )}
                            </TableCell>
                            <TableCell>
                                {editHotelId === item.id ? (
                                    <input
                                        name="location"
                                        value={editFormData.location}
                                        onChange={handleEditChange}
                                        className="border rounded p-1"
                                    />
                                ) : (
                                    item.location
                                )}
                            </TableCell>
                            <TableCell>
                                {editHotelId === item.id ? (
                                    <input
                                        name="price"
                                        value={editFormData.price}
                                        onChange={handleEditChange}
                                        className="border rounded p-1"
                                    />
                                ) : (
                                    item.price
                                )}
                            </TableCell>
                            <TableCell>
                                <Image
                                    width={100}
                                    height={100}
                                    src={item.image}
                                    alt="image"
                                    className="rounded object-cover"
                                />
                            </TableCell>
                            <TableCell className="text-right space-x-2">
                                {editHotelId === item.id ? (
                                    <>
                                        <Button
                                            variant="outline"
                                            size="sm"
                                            onClick={handleSaveEdit}
                                        >
                                            Save
                                        </Button>
                                        <Button
                                            variant="ghost"
                                            size="sm"
                                            onClick={handleCancelEdit}
                                        >
                                            Cancel
                                        </Button>
                                    </>
                                ) : (
                                    <>
                                        <Button
                                            variant="outline"
                                            size="sm"
                                            onClick={() =>
                                                handleEditClick(item)
                                            }
                                        >
                                            Edit
                                        </Button>
                                        <Button
                                            variant="destructive"
                                            size="sm"
                                            onClick={() =>
                                                handleDelete(item.id)
                                            }
                                        >
                                            Delete
                                        </Button>
                                    </>
                                )}
                            </TableCell>
                        </TableRow>
                    ))}
                </TableBody>
            </Table>
        </div>
    );
}
