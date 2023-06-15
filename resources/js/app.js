var app = {
    message: 'Cooker is running!',
    boot:function(){
        console.log(this.message);
    },
    gallery:{
        page: 0,
        loadToasts:function(){
            // load public toasts
            
            this.page++;
        }
    }
};