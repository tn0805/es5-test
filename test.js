// var customer = {name: "Foo"}
// var card = { amount: 7, product: "Bar", unitprice: 42}
// var message = `Hello ${customer.name}, want to buy ${card.amount} ${card.product} for a total of ${card.amount * card.unitprice} bucks?` 
// console.log(message)

$(function () {
    var $stories = $('#stories');

    $.ajax({
        async:  false,
        type: 'GET',
        url: 'https://hacker-news.firebaseio.com/v0/topstories.json?print=pretty',
        success: function(stories){
            $.each(stories, function ( i, story) {
                var $id = story;
                $.ajax({
                    type: 'GET',
                    url: 'https://hacker-news.firebaseio.com/v0/item/'+$id+'.json?print=pretty',
                    success: function (content) {
                        var source = document.getElementById("entry-template").innerHTML;
                        var template = Handlebars.compile(source);
                        var context = { title: content.title,url: content.url, score: content.score, by: content.by, descendants: content.descendants};
                        var html = template(context); 
                        document.getElementById("stories").innerHTML += html;
                    }
                });
            })
        }
    });
});
