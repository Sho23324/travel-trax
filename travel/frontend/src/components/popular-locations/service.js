import AXIOS_API from "@/utils/axiosAPI";

export async function getPopularPlaces() {
    const { data } = await AXIOS_API.get("destinations");

    return data.data;
}
