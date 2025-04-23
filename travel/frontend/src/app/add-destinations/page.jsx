import AddDestination from "@/components/add-destinations";
import { AlertDialog, AlertDialogAction } from "@/components/ui/alert-dialog";

export default function Destinations() {
    return (
        <div className="mt-50">
            <div className="">
                <AddDestination />
                <p>You have no Destinations </p>
            </div>
        </div>
    );
}
