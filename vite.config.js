import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/sass/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    build: {
        //? hay que hacer 2 builds, uno para la carpeta `public` y otro para la carpeta raiz de esa manera he solucionado por ahora
        // outDir: "public/build",
        outDir: "build",
    },
});
