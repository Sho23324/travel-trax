import { DatePickerDemo } from "../date-picker";
import MultipleSelectorControlled from "../multi-selector";

export default function Form() {
    return (
        <div className="">
            <div className="">
                <form action="" className="border-1 ">
                    <div className="">
                        <label htmlFor="">Trip Name</label> <br />
                        <input
                            className="border-1 bg-gray-200"
                            type="text"
                            name="trip_title"
                            placeholder="Enter trip name"
                        />
                    </div>
                    <div className="">
                        <label htmlFor="">Choose Destination</label> <br />
                        <input
                            className="border-1 bg-gray-200"
                            type="text"
                            name="trip_title"
                            placeholder="Enter destinations"
                        />
                    </div>
                    <div className="flex">
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
                    <button className="bg-green-400 p-2" type="submit">
                        Create
                    </button>
                </form>
            </div>
        </div>
    );
}
