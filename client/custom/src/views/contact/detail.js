Espo.define('custom:views/contact/detail', 'views/detail', function(Dep){

    return Dep.extend({
        setup: function(){
            Dep.prototype.setup.call(this);
            
            this.addMenuItem('buttons', {
                name: 'btnTest',
                label: 'test',
                acl: 'edit',
                action: 'testaction'
            }, true);
        },

        actionTestaction: function(){
            debugger;
            console.log(this.model);
            window.open('https://www.youtube.com');
        }
    });
});