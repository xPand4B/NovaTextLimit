<template>
    <panel-item :field="field">
        <template slot="value">
            <a
                v-if="field.value && field.isLink"
                :href="field.value"
                target="_blank"
                class="text-primary inline-flex items-center dim cursor-pointer no-underline"
            >
                <span class="text-primary font-bold">{{ field.value }}</span>
            </a>
            <p v-else-if="field.value" class="text-90">{{ field.value }}</p>
            <p v-else>&mdash;</p>
        </template>
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
