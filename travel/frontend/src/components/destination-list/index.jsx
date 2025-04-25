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
import AddDestinationDialog from "../create-destination-dialog";

export default function AdminDestinationsTable() {
    const [destinations, setDestinations] = useState([]);
    const [editDestinationId, setEditDestinationId] = useState(null);
    const [editFormData, setEditFormData] = useState({});

    useEffect(() => {
        const fetchData = async () => {
            const response = await axios.get(
                "http://localhost:8000/api/destinations"
            );
            setDestinations(response.data.data);
        };
        fetchData();
    }, []);

    const handleDelete = async (destination_id) => {
        try {
            await axios.delete(
                `http://localhost:8000/api/destinations/${destination_id}`
            );

            setDestinations((prev) =>
                prev.filter((destination) => destination.id !== destination_id)
            );

            toast.success("Destination deleted successfully!", {
                style: {
                    backgroundColor: "#4ade80",
                    color: "#fff",
                    padding: "12px 24px",
                },
            });
        } catch (error) {
            toast.error("Failed to delete destination.");
        }
    };

    const handleEditClick = (destination) => {
        setEditDestinationId(destination.id);
        setEditFormData({ ...destination });
    };

    const handleEditChange = (e) => {
        const { name, value } = e.target;
        setEditFormData((prev) => ({ ...prev, [name]: value }));
    };

    const handleCancelEdit = () => {
        setEditDestinationId(null);
        setEditFormData({});
    };

    const handleSaveEdit = async () => {
        try {
            await axios.put(
                `http://localhost:8000/api/destinations/${editDestinationId}`,
                editFormData
            );

            toast.success("Destination updated successfully!", {
                style: {
                    backgroundColor: "#4ade80",
                    color: "#fff",
                    padding: "12px 24px",
                },
            });

            setDestinations((prev) =>
                prev.map((destination) =>
                    destination.id === editDestinationId
                        ? { ...destination, ...editFormData }
                        : destination
                )
            );

            setEditDestinationId(null);
            setEditFormData({});
        } catch (error) {
            toast.error("Failed to update destination.");
        }
    };

    return (
        <div className="p-6">
            <div className="flex justify-between">
                <h2 className="text-2xl font-bold mb-4">Destinations</h2>
                <AddDestinationDialog />
            </div>
            <Table>
                <TableHeader>
                    <TableRow>
                        <TableHead>Id</TableHead>
                        <TableHead>Name</TableHead>
                        <TableHead>Description</TableHead>
                        <TableHead>Location</TableHead>
                        {/* <TableHead>Price</TableHead> */}
                        <TableHead>Image</TableHead>
                        <TableHead className="text-right">Actions</TableHead>
                    </TableRow>
                </TableHeader>
                <TableBody>
                    {destinations.map((item) => (
                        <TableRow key={item.id}>
                            <TableCell>{item.id}</TableCell>
                            <TableCell>
                                {editDestinationId === item.id ? (
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
                                {editDestinationId === item.id ? (
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
                                {editDestinationId === item.id ? (
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
                            {/* <TableCell>
                                {editDestinationId === item.id ? (
                                    <input
                                        name="price"
                                        value={editFormData.price}
                                        onChange={handleEditChange}
                                        className="border rounded p-1"
                                    />
                                ) : (
                                    item.price
                                )}
                            </TableCell> */}
                            {/* <TableCell>
                                <Image
                                    width={100}
                                    height={100}
                                    src={item.image}
                                    alt="image"
                                    className="rounded object-cover"
                                />
                            </TableCell> */}
                            <TableCell className="text-right space-x-2">
                                {editDestinationId === item.id ? (
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
