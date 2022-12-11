import legacy from "@vitejs/plugin-legacy";
import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    build: {
        assetsInlineLimit: "2048", // 2kb
    },
    plugins: [
        legacy({
            targets: ["defaults", "not IE 11"],
        }),
        laravel({
            input: [
                "resources/assets/template/plugins/fontawesome-free/css/all.min.css",
                "resources/assets/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css",
                "resources/assets/template/dist/css/adminlte.min.css",
                "resources/js/static_assets.js", // static assets

                "resources/assets/template/plugins/jquery/jquery.min.js",
                "resources/assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js",
                "resources/assets/template/plugins/sweetalert2/sweetalert2.all.min.js",
                "resources/assets/template/dist/js/adminlte.min.js",
                "resources/assets/template/dist/js/demo.js",
            ],
            refresh: true,
        }),
    ],
});
