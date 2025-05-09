import Image from "next/image";
import Link from "next/link";
import React from "react";

const Card = ({ place }) => {
    const url = `/catalog?city=${
        place.value
    }&min_price=${50}&max_price=${999}&type=${"luxury"}`;

    return (
        <Link
            href={url}
            className="cursor-pointer h-[600px] w-[350px] flex flex-wrap rounded-xl shadow-md"
        >
            <div className="relative h-2/3 w-full">
                {place?.image && place.image !== "" && (
                    <Image
                        width={300}
                        height={300}
                        src={place.image}
                        alt="image"
                        className="h-full w-full overflow-hidden rounded-tl-xl rounded-tr-xl object-cover"
                    />
                )}

                <div className="absolute right-0 bottom-0 capitalize p-4 bg-green-400 text-white rounded-tl-xl font-semibold">
                    {place.name}
                </div>
            </div>
            <div className="flex flex-col gap-4 p-4">
                <h2 className="text-center text-2xl text-slate-800 font-semibold">
                    {place.numOfPlaces} Places to stay
                </h2>
                <p className="text-center mt-2 text-lg text-slate-700">
                    Discover the best hotel or apartment for your adventurous
                    journey.
                </p>
            </div>
        </Link>
    );
};

export default Card;
