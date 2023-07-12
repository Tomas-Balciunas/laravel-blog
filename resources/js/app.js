import './bootstrap';
import 'flowbite';
import { createApp } from 'vue';

const app = createApp({});

import AlertComponent from "./components/AlertComponent.vue";
import BlogListComponent from "./components/BlogListComponent.vue";

app.component('alert-component', AlertComponent);
app.component('blog-list', BlogListComponent);

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

app.mount('#app');
