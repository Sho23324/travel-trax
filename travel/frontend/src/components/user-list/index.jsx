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

export default async function AdminUsersTable() {
    const fetchData = await axios.get("http://localhost:8000/api/users");
    const destinations = await fetchData.data.data;
    return (
        <div className="p-6">
            <h2 className="text-2xl font-bold mb-4">Hotels</h2>
            <Table>
                <TableHeader>
                    <TableRow>
                        <TableHead>Id</TableHead>
                        <TableHead>Name</TableHead>
                        {/* <TableHead>Description</TableHead>
                        <TableHead>Location</TableHead>
                        <TableHead>Price</TableHead> */}
                        {/* <TableHead>Image</TableHead> */}
                        <TableHead className="text-right">Actions</TableHead>
                    </TableRow>
                </TableHeader>
                <TableBody>
                    {destinations.map((item, index) => (
                        <TableRow key={index}>
                            <TableCell>{item.id}</TableCell>
                            <TableCell>{item.name}</TableCell>
                            {/* <TableCell>{item.description}</TableCell>
                            <TableCell>{item.location}</TableCell>
                            <TableCell>{item.price}</TableCell> */}
                            {/* <TableCell>
                                <Image
                                    width={300}
                                    height={300}
                                    src={item.image}
                                    alt="image"
                                    className="h-full w-full overflow-hidden rounded-tl-xl rounded-tr-xl object-cover"
                                />
                            </TableCell> */}
                            <TableCell className="text-right space-x-2">
                                <Button variant="outline" size="sm">
                                    Edit
                                </Button>
                                <Button variant="destructive" size="sm">
                                    Delete
                                </Button>
                            </TableCell>
                        </TableRow>
                    ))}
                </TableBody>
            </Table>
        </div>
    );
}
