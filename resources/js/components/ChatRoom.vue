<template>
    <div class="input-group">
        <input type="text" class="form-control" :disabled="is_disabled" v-model="chat" v-on:keyup.enter="sendChat" autofocus>
        <div class="input-group-append">-->
        <button class="btn btn-primary" type="button" v-on:click="sendChat">Send</button>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['user_id', 'friend_id', 'history'],
        data() {
            return {
                chat: '',
                is_disabled: false,
            }
        },
        methods: {
            sendChat: function (e) {
                let data = {
                    chat: this.chat,
                    user_id: this.user_id,
                    friend_id: this.friend_id,
                    user: {
                        avatar: $('meta[name=user_avatar]').attr('content'),
                    },
                    is_sendmail: !(_.find(this.onlineusers, {id: this.friend_id})),
                };

                axios.post('/chat-room/sendChat', data).then((response) => {
                    this.history.push(data);
                    this.chat = '';
                    this.is_disabled = false;
                    $("html, body").animate({scrollTop: $(document).height()}, 100);
                }).catch((error) => {
                    this.is_disabled = false;
                });
            },
        }
    }
</script>