"use client";

import * as React from "react";
import { Check, ChevronsUpDown } from "lucide-react";
import { cn } from "@/lib/utils";
import { Button } from "@/components/ui/button";
import {
    Command,
    CommandEmpty,
    CommandGroup,
    CommandInput,
    CommandItem,
    CommandList,
} from "@/components/ui/command";
import {
    Popover,
    PopoverContent,
    PopoverTrigger,
} from "@/components/ui/popover";
import axios from "axios";

export function ComboboxDemo({ value, onChange }) {
    const [open, setOpen] = React.useState(false);
    const [data, setData] = React.useState([]);

    const fetchData = async () => {
        const response = await axios.get(
            "http://localhost:8000/api/destinations"
        );
        setData(response.data.data);
    };

    React.useEffect(() => {
        fetchData();
    }, []);

    return (
        <Popover open={open} onOpenChange={setOpen}>
            <PopoverTrigger asChild>
                <Button
                    variant="outline"
                    role="combobox"
                    aria-expanded={open}
                    className="w-[200px] justify-between"
                >
                    {value ? value.name : "Select states..."}
                    <ChevronsUpDown className="opacity-50" />
                </Button>
            </PopoverTrigger>
            <PopoverContent className="w-[200px] p-0">
                <Command>
                    <CommandInput
                        placeholder="Search states..."
                        className="h-9"
                    />
                    <CommandList>
                        <CommandEmpty>No states found.</CommandEmpty>
                        <CommandGroup>
                            {data.map((destination) => (
                                <CommandItem
                                    key={destination.id}
                                    value={destination.name}
                                    onSelect={() => {
                                        onChange(destination); // send both id + name
                                        setOpen(false);
                                    }}
                                >
                                    {destination.name}
                                    <Check
                                        className={cn(
                                            "ml-auto",
                                            value?.id === destination.id
                                                ? "opacity-100"
                                                : "opacity-0"
                                        )}
                                    />
                                </CommandItem>
                            ))}
                        </CommandGroup>
                    </CommandList>
                </Command>
            </PopoverContent>
        </Popover>
    );
}
