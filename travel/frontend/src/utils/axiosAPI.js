import axios from "axios";

const baseURL = "http://localhost:8000/api/";

const AXIOS_API = axios.create({
    baseURL,
});

export default AXIOS_API;
