export default {

    data() {
        return  {
            search: '',
            loading: false,
            findings: null,
            selected: null
        }
    },

    mounted() {

        this.dialog = this.$el.closest('kiss-dialog');

        setTimeout(() => {
            this.$refs.searchInput.focus();
        });

        this.dialog.addEventListener('click', e => {
            if (e.target.closest('kiss-content')) return;
            this.dialog.close();
        });
    },

    methods: {

        keydown(event) {

            switch (event.keyCode) {

                // close on ESC
                case 27:
                    this.dialog.close();
                    break;
                // enter
                case 13:

                    if (this.selected !== null) {
                        this.goto(this.findings[this.selected]);
                        return;
                    }
                    this.query();
                    break;

                // up | down
                case 38:
                case 40:

                    if (!Array.isArray(this.findings)) {
                        return;
                    }

                    event.preventDefault();

                    if (this.selected == null) {
                        this.selected = event.keyCode == 38 ? this.findings.length - 1 : 0;
                    } else {

                        if (event.keyCode == 38) {
                            this.selected = this.findings[this.selected - 1] ? this.selected - 1 : this.findings.length - 1 ;
                        } else {
                            this.selected = this.findings[this.selected + 1] ? this.selected + 1 : 0 ;
                        }
                    }
                    break;

            }

        },

        goto(finding) {
            console.log(finding.route)
            location.href = finding.route;
        },

        query() {

            this.selected = null;
            this.findings = null;

            if (!this.search.trim()) {
                return;
            }

            this.loading = true;

            this.$request('/utils/search', {search: this.search}).then(findings => {

                setTimeout(() => {

                    if (!Array.isArray(findings)) {
                        findings = [];
                    }

                    this.findings = findings;
                    this.loading = false;

                    if (findings.length) {
                        this.selected = 0;
                    }

                    setTimeout(() => {
                        this.$refs.searchInput.focus();
                    }, 50);
                }, 200)
            });
        }
    },

    template: /*html*/`
        <div id="app-search">
            <div class="kiss-flex kiss-flex-middle kiss-margin-small">
                <div class="kiss-color-muted kiss-margin-small-right">
                    <kiss-svg :src="$base('system:assets/icons/search.svg')" width="30"><canvas width="30" height="30"></canvas></kiss-svg>
                </div>
                <div class="kiss-flex-1">
                    <input class="kiss-input kiss-input-blank kiss-form-large kiss-width-1-1" :class="{'kiss-disabled': loading}" type="text" v-model="search" :placeholder="t('Search...')" :disabled="loading" @keydown="keydown" @input="selected=null" ref="searchInput" style="font-size:30px;padding:0;">
                </div>
            </div>

            <kiss-card class="kiss-color-muted kiss-size-large kiss-align-center kiss-padding" v-if="loading">
                <app-loader size="small" mode="dots"></app-loader>
            </kiss-card>

            <kiss-card class="kiss-color-muted kiss-size-large kiss-align-center kiss-padding-large" v-if="Array.isArray(findings) && !findings.length">
                {{ t('Nothing found') }}
            </kiss-card>

            <div v-if="Array.isArray(findings) && findings.length">

                <div class="kiss-text-caption kiss-color-muted kiss-margin-small">{{ t('Findings') }}</div>

                <div style="max-height:50vh;overflow:auto;">
                    <kiss-card class="kiss-padding-small kiss-flex kiss-flex-middle" :class="{'kiss-color-primary': idx == this.selected, 'kiss-color-muted': idx != this.selected}" :theme="idx == this.selected && 'contrast'" v-for="finding, idx in findings" @click="goto(finding)">
                        <div class="kiss-margin-small-right">
                            <kiss-svg :src="$base(finding.icon || 'system:assets/icons/link.svg')" width="20" height="20"></kiss-svg>
                        </div>
                        <div class="kiss-flex-1">
                            {{ finding.title }}
                        </div>
                    </kiss-card>
                </div>


            </div>
        </div>
    `
}
