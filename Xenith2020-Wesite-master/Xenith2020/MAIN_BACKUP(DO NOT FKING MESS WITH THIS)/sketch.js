function setup() {
    
    const RiveScript = require('rivescript');

    var bot = new RiveScript();
    bot.loadFile('brain.rive').then(bot_sucess, bot_error);

    function bot_sucess() {
        console.log('Done');
        bot.sortReplies();
    }

    function bot_error() {
        console.log('not Done');
    }

    let user = select('#user_in');
    let reply = select('#reply');

    let btn = select('#btn');

    btn.mousePressed(chat);

    function chat() {

        var foo = new p5.Speech();

        let output = user.value();

        bot.reply("local-user", output).then(function (rep) {

            document.getElementById('user_reply').innerHTML = output + '<br>';

            document.getElementById('reply').innerHTML = '<b>' + 'G.I.P: ' + '</b>' + rep + '<br>';

            foo.speak(rep);

        })

        document.getElementById('user_in').value = '';

        window.setTimeout("document.getElementById('mr_gip').style.display = 'inline';", '1');
        window.setTimeout("document.getElementById('mr_gip').style.display = 'none';", '4500');
    }

}


