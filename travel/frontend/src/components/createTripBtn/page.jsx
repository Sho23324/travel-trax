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
import Input from "@/ui/Input";
import { DatePickerDemo } from "../date-picker";
import { redirect } from "next/navigation";

export default function CreateTripBtn() {
    const handleCreate = () => {
        redirect("create-trip");
    };
    return (
        <AlertDialog>
            <AlertDialogTrigger className="font-bold bg-blue-900  py-2 pl-4 pr-4 text-white ml-2 cursor-pointer rounded-full">
                Create Trip
            </AlertDialogTrigger>
            <AlertDialogContent>
                <AlertDialogHeader>
                    <AlertDialogTitle>Create Trip</AlertDialogTitle>
                    <AlertDialogDescription>
                        <Input placeholder="Enter trip name" />
                        <ComboboxDemo />
                        <br />
                        <div className="grid grid-cols-2 gap-5">
                            <div className="">
                                <label htmlFor="">Start Date</label>
                                <br />
                                <DatePickerDemo />
                            </div>
                            <div className="">
                                <label htmlFor="">End Date</label>
                                <br />
                                <DatePickerDemo />
                            </div>
                        </div>
                    </AlertDialogDescription>
                </AlertDialogHeader>
                <AlertDialogFooter>
                    <AlertDialogCancel>Cancel</AlertDialogCancel>
                    <AlertDialogAction onClick={handleCreate}>
                        Create
                    </AlertDialogAction>
                </AlertDialogFooter>
            </AlertDialogContent>
        </AlertDialog>
    );
}
