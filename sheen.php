<?php
/**
 * @package Hello_Charlie
 * @version 1.0
 */
/*
Plugin Name: Charlie Sheen Quote Generator
Plugin URI: http://leonamarant.com/
Description: This plugin displays a random quote from Charlie Sheen. This includes a Widget you can include in your sidebar, a short code, [charlie sheen] that you can use in your blog posts, and also replaces the default Hello Dolly quote in the Wordpress admin panel with a quote from everyone's favorite actor. Winning!
Author: Leon Amarant
Version: 1.0
Author URI: http://leonamarant.com/
*/

function charlie_sheen_quote() {
	$quotes = array("Good luck on your travels. You're going to need it. Badly.","Sorry man, didn't make the rules.","I embarrassed him in front of his children and the world.","I've got magic. I've got poetry at my fingertips.","Mistook this rockstar, bro.", "I'm dealing with fools and trolls.", "I'm frikin bayonets", "The only thing I'm addicted to right now is winning.", "Just shut your traps and put down your McDonald's, your magazines, your TMZ and the rest of it and focus on something that matters.", "I'm not Thomas Jefferson. He was a pussy.","My success rate is 100 percent. Do the math.", "It's just strafing runs in my underwear before my first cup of coffee.", "I'm so tired of pretending my life isn't perfect and bitchin'.","Imagine what I would have done with my fire-breathing fists.","Here's your first pee test. The next one goes in your mouth. No, you won't get high.","The scoreboard doesn't lie. Never has.","I am battle-tested bayonets bro.","Where there were four, there are now three.","Just sit back and enjoy the show.","I have real fame. They have nothing.","Bring me a challenge. Somebody.","Pure and complete gnarly-isms.","There's my life. Deal with it. Oh, wait, can't process it? LOSERS.", "I'm so tired of pretending like my life isn't perfect and bitchin and just winning every second", "And they will get out there and they will sell me and they will lose. ", "A lot of people think Major League's called Wild Thing. As they should.", "Let me just say this, there's nothing.", "Why give an interview when you can leave a warning?","There's a new sheriff in town. And he has an army of assassins.","We work for the pope.","Gnarly gnarlingtons.","I am special, and I will never be one of you.","There are parts of me that are Dennis Hopper.","I don't live in the middle anymore. That's where you get embarrassed in front of the prom queen.","Thought you were messing with one dude? Sorry.","WINNING.","WINNING.","I'm going to hang out with these two smoooooking hotties and fly privately around the world.","It might be lonely up here but I sure like the view.","I'm done. It's on. Bring it.","I wanted to watch Jaws on the ocean in the dark and be afraid.","This guy's got more notches on his belt than Black Bart.","This is me not on drugs bro.","The first one's free. The next one goes in your mouth.","This contaminated little maggot can't handle my power.","Clearly I have defeated this earthworm with my words.","I closed my eyes and in a nanosecond I cured myself.","Quit hiding dude. It's embarrassing. Next subject.","It's funny how sheep rhymes with sleep.","Bull S-H-I-T.","I've spent close to the last decade effortlessly and magically converting your tin cans into pure gold.","You've been warned dude. Bring it.","Apocalypse Now will teach you how to live inside of a moment between a moment.","I have a disease? Bullshit. I cured it with my brain.","If you're a part of my family, I will love you violently.","I look at the game of baseball and I'm reminded of a quote that I wrote.","They couldn't extinguish my pilot light. And that was a mistake.","I'm 45, I've got five kids, and I've been dumped on for too long.","One of my favorite poets is Eminem.","Let's hook up and just bring fiery death.","Watch me bury you.","I don't sleep. I wait.", "Boom, that's the whole movie, that's life.", "Let's talk about something exciting. Me.","Everybody has a black belt and carries a gun. I don't mess with people.","I'm rolling out magic, bro.","Touch my children and I will eat your hands off your arms.","Go back to the troll hole where you came from.","I'm just giving them what I guess they want, I just don't know if they can handle it. Pussies.","I guess I'm just that goddamn bitchin'.","We're Vatican assassins. How complicated can it be?","Most of the time- and this includes naps- I'm an F-18.","I don't know, winning, anyone? Rhymes with winning? Anyone? Yeah, that would be us.","I have one speed. I have one gear. Go.","I dare you to keep up with me.","I am on a drug. It's called Charlie Sheen.","I'm an F-18 bro.","The run I was on made Sinatra, Flynn, Jagger and Richards look like droopy-eyed armless children.","Your face will melt off and your children will weep over your exploded body.","You should have read the directions before you showed up at the party.","I've got tiger blood, man.","Your face will melt off and your children will weep over your exploded body.","I may forget about them tomorrow, but they'll live with that memory for the rest of their lives. And that's a gift.","I was banging seven gram rocks and finishing them. Because that's how I roll.","I have a different constitution.","I use a blender. I use a vacuum cleaner.","I'm bi-winning. I win here, and I win there.","What's the cure? Medicine?","You borrow my brain for five seconds and just be like 'Dude, can't handle it. Unplug this bastard.","Basically they strapped on their diapers.","I exposed people to magic.","Shut up. Stop. Move forward.","Wow. What does that mean.","Resentments are the rocket fuel that lives in the tip of my sabre.","I'm tired of pretending I'm not a total, bitchin' rock star from Mars.","Drug tests don't lie.","It's a war. And it's on.","Sorry my life is so much more bitchin' than yours. I planned it that way.","I take great umbrage with that.","I don't have burnout in my gear box.","I'm just going to sail across the winds of the universe with my goddesses.","That was the America I was raised in.","If people could just read behind the hieroglyphic.","I don't think people are ready for the message I'm delivering.","They picked a fight with a warlock.","Faith is for winners. Hope is for losers.","Clearly he didn't bring gum for everyone.","I'm going to win every moment.","That's the code. And we all live by it.","Here's your cold coffee. Buh-bye.","Surprise. That's what winners do.","I can't make up a hernia. That's just lame.","It's a three-letter word. It rhymes with why.","My conduct is bitchin'.","Come on bro, I won best picture at 20.","Your perimeter's been breached. You got work to do bro.","It was so gnarly I can't remember.","I'm not recovering like some pussy.","Rock bottom? That's a fishing term.","I'm a grandiose life, and I'm embracing it.","Can't is the cancer of happen.","Dying is for fools. Amateurs.","When I'm fighting a war there's no room for sensitivity.","If you can bring me a souvenir from that moment when your father locked you in the closet, then bring it to me.","She was attacking me with a small fork.","What was she doing with a shrimp fork in her purse?","I'm still alive, which is pretty cool.","Women are not to be hit. They are to be hugged and caressed.","I have a 10,000-year-old brain and the boogers of a seven-year-old.","Get over here and enjoy the ride, bro. We're starting to win.","I'm not taking it. I had to pay for it.","Vintage balderdash.","I've been a veteran of the unspeakable.","I literally woke up and it was Christmas.","It's been a tsunami. And I've been riding it on a mercury surfboard.","We're on a rocket ship to the moon some nights.","I don't understand what I did wrong except live a life that everyone is jealous of.","Duh, WINNING.","Park your nonsense.","Don't live in the middle.","Adonis DNA.","We're shaking the tree. We're shaking all the trees.","I am grandiose. Because I live a grandiose life.","Celebrate this movement.","Get a job, anyone?","You can't process me with a normal brain.","I've got tiger blood and Adonis DNA,","You've been given magic. You've been given gold.","Bi-polar? The Earth is bi-polar.","Damn, I didn't take care of myself. Again.","I just want to hug him and rub his head.","I'm an exciting client.","What's not to love?","I'm alive. Bring it.","Look at these sad trolls.","I'm a peaceful man with bad intentions.","Sorry Middle America.","Who wants to deal with all the small talk?","Really dude? Really?","The last time I used? What do you mean?  I used my toaster this morning.","Hey kids. Your Dad's a rockstar.","Everything. Next question.","Can I have one part of my life that isn't TMZ'd up the butt?","We need his wisdom and his bitchin'-ness.","Work fuels the soul.","Winning. Everyday.","Add some gold.","Change your brain.","People can't figure me out. They can't process me. I don't expect them to.","They can't hang with me. Their bones would melt like wax.","I'm not 'aw shucks'. Because I'm gnarly.","Got to dismiss these clowns.","I'm on a quest to claim absolute victory on every front.","Teamwork. Bang.","The wildfires are spreading. The meek are scattering.","They hate themselves first.","Biggest star in the world.","I'm living inside the truth. And the truth doesn't change.","He has no salt in his soul.","C'mon. The guy wears corduroys.","I honorably pass that torch to these young geniuses.","Change the channel. I dare you.","I've been blessed with a new brain.", "I'm an F-18 and I will destroy you in the air and I will deploy my ordnance to the ground.", "It's about winning. Sorry.","Bitchin' focus.","Get back in the game dude.","Get the cancer out of the mix.","Gnarly you are not.","Of course you're gnarly. You're talking to me.","Wow. That's epic.","That just flew out. That was a pretty good one.","I'm an F-18 bro.");

	// And then randomly choose a line
	return wptexturize( $quotes[ mt_rand( 0, count( $quotes ) - 1 ) ] );

}

function charlie_sheen_widget(){
	echo "<div id='hellocharlie'>".charlie_sheen_quote()."</div>";
}

function widget_CharlieSheenQuote() {
	charlie_sheen_widget();
}

function CharlieSheenQuoteWidget_init()
{
  register_sidebar_widget(__('Charlie Sheen Quote Generator'), 'widget_CharlieSheenQuote');
}

function hello_charlie_admin() {
	$chosen = charlie_sheen_quote();
	echo "<div id='hellocharlie'>".$chosen."</div>";
}


function charlie_admin_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));
	echo "
		<style type='text/css'>
			#hellocharlie{
				clear:both;
				width: 40%;
				margin: auto;
				font-size: 12px;
				font-family: Tahoma;
				padding: 5px 10px 5px 65px;
				background-image: url(".$x."sheen.png);
				background-position: top left; 
				background-repeat: no-repeat;
				min-height: 60px;
				height: auto !important; 
				height: 60px;
			}
			#dolly{display:none;}
		</style>
		";
	
}

function charlie_site_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));
	echo "
	<style type='text/css'>
			#hellocharlie{
				clear:both;
				margin: auto;
				font-size: 12px;
				font-family: Tahoma;
				padding: 5px 10px 5px 65px;
				background-image: url(".$x."sheen.png);
				background-position: top left; 
				background-repeat: no-repeat;
				min-height: 60px;
				height: auto !important; 
				height: 60px;
			}
		</style>
	";
}



add_action( 'admin_notices', 'hello_charlie_admin', 1000);
add_action("plugins_loaded", "CharlieSheenQuoteWidget_init");
add_shortcode("charlie sheen","charlie_sheen_quote");
add_action( 'admin_head', 'charlie_admin_css', 1000);
add_action( 'wp_head', 'charlie_site_css' );

?>
