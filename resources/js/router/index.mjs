import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        name: "home",
        component: () => import("../vue-views/index.vue"),
    },
    {
        path: "/blog",
        name: "blog",
        component: () => import("../vue-views/blog.vue"),
    },
    {
        path: "/project",
        name: "project",
        component: () => import("../vue-views/project.vue"),
    },
    {
        path: "/project/:id",
        name: "project-show",
        component: () => import("../vue-views/showProject.vue"),
        props: true,
    },
    {
        path: "/about",
        name: "about",
        component: () => import("../vue-views/about.vue"),
    },
    {
        path: "/:catchAll(.*)",
        name: "404",
        component: () => import("../vue-views/404.vue"),
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.APP_URL),
    routes,
});

export default router;
