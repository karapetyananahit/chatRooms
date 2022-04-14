<template>
    <div>
        <el-card class="box-card">
            <div slot="header" class="clearfix">
                <div>
                    Rooms
                </div>
            </div>
            <div>
                <el-table
                    :data="tableData"
                    :stripe="true"
                    :border="true"
                    height="400"
                    style="width: 100%">


                    <el-table-column
                        v-for="(column) in tableColumns"
                        :key="column.label"
                        :label="column.label"
                        :prop="column.prop"
                        :column-key="column.prop"
                        :min-width="column.minWidth"
                        :sortable="column.sortable"
                        :align="column.align"
                        :header-align="column.align"
                        :fixed="column.fixed || null"
                        :formatter="column.formatter || null"

                        >
                    </el-table-column>


                    <el-table-column
                        align="right">
                        <template slot-scope="scope">
                            <el-button
                                size="mini"
                                @click="showRoom(scope.$index, scope.row)">OPEN
                            </el-button>
                        </template>
                    </el-table-column>
                </el-table>
            </div>
        </el-card>


    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    name:'rooms',
    mounted() {
        const loading = this.$loading({
            lock:true,
            spinner:'el-icon-loading',
            background:'rgba(255,255,255,0.85)'
        });
        this.$store.dispatch('getRooms');
        loading.close();
    },
    computed: {
        ...mapGetters({
            tableData: 'tableData',
        })
    },

    data() {
        return {
            tableColumns:[
                {
                    prop:'name',
                    label:'Name',
                    minWidth: 40,
                    sortable: false,
                    hidden:false,
                    align: 'center',
                    fixed:true

                }
            ],
    }
    },
    methods: {
        showRoom(index, row) {
            window.location.href = '/chats/'+row.id;
        },


    },
}
</script>
