<template>
    <div class="themes">
        <div v-if="template">
            <a :href="$store.getters['opencart/opData'].base_url" target="_blank" class="home__view-store">
                <v-icon>fas fa-eye</v-icon>
                {{$t('common.preview')}}</a>
            <v-layout
                    justify-space-between
                    theme-holder
                    wrap>
                <v-flex xs12 md3>
                    <h3 class="display-2">{{$t('common.current_theme')}}</h3>
                    <p> {{$t('common.current_theme_description')}}</p>
                </v-flex>
                <v-flex xs12 f-auto>
                    <theme-preview :template="template"
                                   :status="status"
                                   @change-title="rename_theme"
                                   @change-status="change_status"
                    />
                </v-flex>
            </v-layout>
            <v-divider></v-divider>
            <v-layout
                    justify-space-between
                    more-themes-holder
                    wrap>
                <v-flex xs12 md3>
                    <div class="display-2">{{$t('template.available_templates')}}</div>
                    <p> {{$t('template.available_templates_description')}}</p>
                </v-flex>
                <v-flex xs9>
                    <available-themes :templates="templates" :active="template.setting.codename"/>
                </v-flex>
            </v-layout>
            <v-divider></v-divider>
            <div v-if="opencart.d_shopunity">
                <v-btn color="primary" nuxt @click="to('marketplace')">{{$t('template.explore_more_themes')}}</v-btn>
            </div>
            <div v-else>
                <div class="subheading">{{$t('home.download_shopunity')}}</div>
                <a :href="opencart.action.download_shopunity">
                    <v-btn color="primary" >{{$t('home.download')}}</v-btn>
                </a>
            </div>

        </div>
        <v-layout loading v-else align-center justify-center row fill-height wrap text-center>
            <Loader :loading="true"></Loader>
        </v-layout>


    </div>
</template>
<style lang="scss">
    .themes .loading {
        min-height: 400px;
    }

    .home__view-store {
        color: #5a6781;
        .theme--light.v-icon {
            color: #5a6781;
            font-size: 18px;
        }
        display: inline-block;
        margin-bottom: 15px;
    }

</style>
<script>
    import ThemePreview from '~/components/home/ThemePreview.vue';
    import AvailableThemes from '~/components/home/AvailableThemes.vue';
    import {mapGetters} from 'vuex';

    export default {
        name: "index",
        computed: mapGetters({
            templates: 'template/templates',
            template: 'template/active_template',
            status: 'setting/status',
            opencart: 'opencart/opData',
        }),
        components: {
            ThemePreview,
            AvailableThemes
        },
        methods: {
            rename_theme(value) {
                this.$store.dispatch('template/RENAME_TEMPLATE_TITLE', {
                    template_codename: this.template.setting.codename,
                    value: value
                });
            },
            change_status(value) {
                this.$store.dispatch('setting/TOGGLE_STATUS');
            },
            to(path){
            	this.$router.replace(path)
            }
        }
    };
</script>
