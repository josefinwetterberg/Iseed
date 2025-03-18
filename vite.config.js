import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/main.css",
                "resources/css/layout.css",
                "resources/css/auth.css",
            ],
            refresh: true,
        }),
    ],
});
