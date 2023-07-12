<template>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time class="text-gray-500">2023 07 12</time>
                        <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Category</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0" />
                                {{ headline }}
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ content }}</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://imebehavioralhealth.com/wp-content/uploads/2021/10/user-icon-placeholder-1.png" alt="" class="h-10 w-10 rounded-full bg-gray-50" />
                        <div class="text-sm leading-6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0" />
                                    {{ name }}
                                </a>
                            </p>
                        </div>
                    </div>
                </article>

</template>

<script>
export default {
    props: ['headline', 'content', 'name'],
    mounted() {
        //console.log()
    }
}
</script>
