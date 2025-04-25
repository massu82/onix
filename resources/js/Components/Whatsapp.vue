<template>
    <a
        :href="`https://wa.me/${phone}?text=${encodeURIComponent(message)}`"
        class="whatsapp-button"
        target="_blank"
        rel="noopener noreferrer"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="#fff"
            viewBox="0 0 24 24"
            width="28"
            height="28"
        >
            <path
                d="M12.004 2.001c-5.524 0-10 4.477-10 10 0 1.769.468 3.49 1.356 5.006L2 22l5.16-1.353A9.967 9.967 0 0 0 12.003 22c5.523 0 10-4.477 10-10s-4.477-9.999-10-9.999Zm0 17.999c-1.581 0-3.127-.472-4.452-1.354l-.319-.206-3.062.804.816-2.985-.208-.317A8.001 8.001 0 1 1 12.004 20Zm4.246-5.4c-.222-.111-1.313-.647-1.516-.72-.203-.075-.352-.111-.5.112-.148.222-.574.719-.703.865-.13.148-.259.167-.481.056-.222-.112-.937-.344-1.784-1.1-.66-.588-1.104-1.313-1.232-1.535-.13-.222-.014-.343.097-.454.1-.099.222-.26.333-.389.111-.13.148-.222.222-.37.075-.148.037-.278-.018-.39-.055-.11-.5-1.205-.685-1.653-.18-.43-.364-.371-.5-.377l-.426-.007a.822.822 0 0 0-.592.278c-.203.222-.777.76-.777 1.853 0 1.094.796 2.152.906 2.3.111.148 1.569 2.4 3.803 3.368 1.334.576 1.853.626 2.523.528.407-.06 1.313-.537 1.497-1.056.185-.518.185-.962.129-1.056-.055-.093-.203-.148-.426-.26Z"
            />
        </svg>
    </a>
</template>

<script setup>
defineProps({
    phone: {
        type: String,
        required: true,
    },
    message: {
        type: String,
        default: 'Hola, me gustaría más información.',
    },
});
</script>

<style scoped>
.whatsapp-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #25d366;
    color: white;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    z-index: 1000;
    transition: transform 0.2s ease;
}

.whatsapp-button:hover {
    transform: scale(1.1);
}
</style>
