<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

const dropdownFunction = (element) => {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    let list =
        element.parentElement.parentElement.getElementsByClassName(
            "dropdown-content"
        )[0];
    list.classList.add("target");
    for (i = 0; i < dropdowns.length; i++) {
        if (!dropdowns[i].classList.contains("target")) {
            dropdowns[i].classList.add("hidden");
        }
    }
    list.classList.toggle("hidden");
};
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <!-- component -->
                    <div class="sm:px-6 w-full">
                        <div
                            class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10"
                        >
                            <div class="sm:flex items-center justify-end">
                                <button
                                    onclick="popuphandler(true)"
                                    class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded"
                                >
                                    <p
                                        class="text-sm font-medium leading-none text-white"
                                    >
                                        Nouveau Ecole
                                    </p>
                                </button>
                            </div>
                            <div class="mt-7 overflow-x-auto">
                                <table class="w-full whitespace-nowrap">
                                    <tbody>
                                        <tr
                                            tabindex="0"
                                            class="focus:outline-none h-16 border border-gray-100 rounded"
                                        >
                                            <td class="">
                                                <div
                                                    class="flex items-center pl-5"
                                                >
                                                    <p
                                                        class="text-base font-medium leading-none text-gray-700 mr-2"
                                                    >
                                                        Lycée Djama Youssouf
                                                        Mahamoud
                                                    </p>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentcolor"
                                                        class="w-5 text-blue-500"
                                                        viewBox="0 0 640 512"
                                                    >
                                                        <path
                                                            d="M337.8 5.4C327-1.8 313-1.8 302.2 5.4L166.3 96 48 96C21.5 96 0 117.5 0 144L0 464c0 26.5 21.5 48 48 48l208 0 0-96c0-35.3 28.7-64 64-64s64 28.7 64 64l0 96 208 0c26.5 0 48-21.5 48-48l0-320c0-26.5-21.5-48-48-48L473.7 96 337.8 5.4zM96 192l32 0c8.8 0 16 7.2 16 16l0 64c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-64c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 64c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-64zM96 320l32 0c8.8 0 16 7.2 16 16l0 64c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-64c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 64c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-64zM232 176a88 88 0 1 1 176 0 88 88 0 1 1 -176 0zm88-48c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-16 0 0-16c0-8.8-7.2-16-16-16z"
                                                        />
                                                    </svg>
                                                </div>
                                            </td>
                                            <td
                                                class="pl-24 py-3 px-3"
                                                colspan="8"
                                            ></td>
                                            <td
                                                class="pl-24 py-3 px-3"
                                                colspan="8"
                                            ></td>
                                            <td class="pl-24">
                                                <div class="flex items-center">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="20"
                                                        height="20"
                                                        viewBox="0 0 20 20"
                                                        fill="none"
                                                    >
                                                        <path
                                                            d="M7.5 5H16.6667"
                                                            stroke="#52525B"
                                                            stroke-width="1.25"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M7.5 10H16.6667"
                                                            stroke="#52525B"
                                                            stroke-width="1.25"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M7.5 15H16.6667"
                                                            stroke="#52525B"
                                                            stroke-width="1.25"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M4.16669 5V5.00667"
                                                            stroke="#52525B"
                                                            stroke-width="1.25"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M4.16669 10V10.0067"
                                                            stroke="#52525B"
                                                            stroke-width="1.25"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M4.16669 15V15.0067"
                                                            stroke="#52525B"
                                                            stroke-width="1.25"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                    <p
                                                        class="text-sm leading-none text-gray-600 ml-2"
                                                    >
                                                        Effectif(s) :
                                                        <span
                                                            >500
                                                            <strong
                                                                >personne(s)</strong
                                                            ></span
                                                        >
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="pl-5">
                                                <button
                                                    class="py-3 px-3 text-sm focus:outline-none leading-none text-green-700 bg-green-100 rounded hover:bg-green-200"
                                                >
                                                    Modifier
                                                </button>
                                            </td>
                                            <td class="pl-4">
                                                <button
                                                    class="focus:ring-2 focus:ring-offset-2 focus:ring-blue-300 text-sm leading-none text-blue-600 py-3 px-5 bg-blue-100 rounded hover:bg-blue-200 focus:outline-none"
                                                >
                                                    Voir Carte
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="h-3"></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<style>
.checkbox:checked + .check-icon {
    display: flex;
}
</style>
