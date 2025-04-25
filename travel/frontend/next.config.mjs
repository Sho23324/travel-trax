/** @type {import('next').NextConfig} */
const nextConfig = {
    images: {
        remotePatterns: [
            {
                protocol: "https",
                hostname: "localhost",
            },
            {
                protocol: "https",
                hostname: "cf.bstatic.com",
            },
            {
                protocol: "https",
                hostname: "www.booking.com",
            },
        ],
    },
};

export default nextConfig;
