<template>
    <default-field :field="field" :errors="errors" :show-help-text="showHelpText">
        <template slot="field">
            <input
                :id="field.name"
                v-model="value"
                type="text"
                class="w-full form-control form-input form-input-bordered"
                :class="errorClasses"
                :placeholder="field.name"
                :min="field.minLength"
                :max="field.maxLength"
                :disabled="isReadonly"
            />

            <span
                v-if="field.maxLength"
                class="text-sm ml-2"
                :class="isOverMaxLength"
            >
                {{ value.length }} / {{ field.maxLength }}
            </span>
        </template>
    </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    computed: {
        isOverMaxLength() {
            return this.value.length > this.field.maxLength ? 'text-danger-dark' : 'text-80';
        }
    },

    methods: {
        /*
        * Set the initial, internal value for the field.
        */
        setInitialValue() {
            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value || '')
        },
    },
}
</script>
