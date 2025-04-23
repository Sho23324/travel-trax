import { redirect } from "next/navigation";
import { Button } from "@/components/ui/button";
import { CirclePlus } from "lucide-react";

export default function CreateTripBtn() {
    const handleCreate = () => {
        redirect("/create-trip");
    };
    return (
        <Button
            variant="outline"
            className="cursor-pointer ml-5 bg-green-400 hover:bg-green-500"
            onClick={handleCreate}
        >
            <CirclePlus />
            Create Trip
        </Button>
    );
}
