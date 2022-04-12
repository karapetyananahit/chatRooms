import Vue from "vue";
import axios from 'axios'


export const getRooms = ({commit},payload)=>{
    let url = '/get-roomsdata';
    axios.post(url,payload)
        .then(res=>{
            commit('setTableData',res.data);
        });
};
