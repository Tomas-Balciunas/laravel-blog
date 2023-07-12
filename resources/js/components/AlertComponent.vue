<template>
    <div class="fixed bottom-0 left-0 w-full z-999 p-3 text-center bg-emerald-900">

        <span class="text-lg text-white" v-if="alert">{{ alert }}</span>
    </div>

</template>

<script>
export default {
    props: ['alert'],
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
