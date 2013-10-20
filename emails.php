<?php
/*
What this PHP script does is automatically generate thousands of random email addresses whenever it is accessed. So visiting the file in your browser, you’ll see the same thing that a harvester will see: thousands of email addresses ripe for the plucking. Only these emails are bogus, leading the spammers on a wild goose chase that consumes their resources, drains their bandwidth, dilutes their potency, and ultimately costs them time and precious money. Punishment fits the crime is an understatement.

in robot.txt, add :
User-agent: *
Disallow: /emails.php
*/
$page = '';
$limitpage = 50; // longueur page
$limitt = 3; // specify the number of text
$maxmail = 100; // nb maxi mail par group         

for ($i = 0; $i < $limitpage; $i++) {
    $limitm = mt_rand( 0, $maxmail);    
    for ($j = 0; $j < $limitt; $j++) {
	$page .= ipsum();
    }
    for ($k = 0; $k < $limitm; $k++) {
     $page .= generate_emails();
    }
}
function ipsum() {
    $ipsumlorem = '';
    $names = array ('1 Chuck ipsum. Chuck Norris doesn’t eat. Rather he kicks ass until he’s full. When asked what type of vehicle he drives, Chuck Norris responded slyly with "Don\'t you mean what kind of vehicle drives me?" Playgirl magazine once asked Chuck Norris to appear naked in an issue, Chuck laughed at the opportunity saying “there isn’t enough paper in the world to contain my bearded member”. He then killed the editors simply by unzipping his pants.', '2 Chuck Norris found out about Conan O\'Brien\'s lever that shows clips from "Walker: Texas Ranger" and is working on a way to make it show clips of Norris having sex with Conan\'s wife. Chuck Norris drinks napalm to quell his heartburn. Scientists used to believe that diamond was the world’s hardest substance. But then they met Chuck Norris, who gave them a roundhouse kick to the face so hard, and with so much heat and pressure, that the scientists turned into artificial Chuck Norris. If you have five dollars and Chuck Norris has five dollars, Chuck Norris has more money than you. Chuck Norris once ate three 72 oz. steaks in one hour. He spent the first 45 minutes having sex with his waitress. Chuck Norris got a perfect score on his SAT\'s, simply by writing Chuck Norris for every answer.', '3 Chuck Norris\' evil twin brother, Richard Simmons, once approached Chuck with the hope of reconciliation, but at the sight of Richard\'s curly, well kept hair, Chuck Norris became so enraged that he turned green with hate and ripped Richard Simmons arms and legs off. This action was the origin of the Marvel Comic badass, The Incredible Hulk. Scientists used to believe that diamond was the world’s hardest substance. But then they met Chuck Norris, who gave them a roundhouse kick to the face so hard, and with so much heat and pressure, that the scientists turned into artificial Chuck Norris. Scientists in Washington have recently conceded that, if there were a nuclear war, all that would remain are cockroaches and Chuck Norris. Chuck Norris does not hunt because the word hunting infers the probability of failure. Chuck Norris goes killing.', '4 Chuck Norris once commented, "There are few problems in this world that cannot be solved by a swift roundhouse kick to the face. In fact, there are none."Chuck Norris once ate an entire ream of rice paper and shat out origami swans and Mister Miyagi from Karate Kid. When the Boogeyman goes to sleep every night he checks his closet for Chuck Norris. Chuck Norris is what Willis was talking about Ironically, Chuck Norris\’ hidden talent is invisibility. In the original pilot for Star Trek Next Generation, Chuck Norris can be seen powering the USS Enterprise warp drive with his roundhouse kicks. Chuck Norris invented a language that incorporates karate and roundhouse kicks. So next time Chuck Norris is kicking your ass, don’t be offended or hurt, he may be just trying to tell you he likes your hat. Chuck Norris doesn’t need to swallow when eating food. When Chuck Norris was denied a Bacon McMuffin at McDonalds because it was 10:35, he roundhouse kicked the store so hard it became a KFC.', '5 Aliens do exist. They\'re just waiting for Chuck Norris to die before they attack. Chuck Norris put humpty dumpty back together again, only to roundhouse kick him in the face. Later Chuck dined on scrambled eggs with all the king\'s horses and all the king\'s men. The king himself could not attend for unspecified reasons. Coincidentally, the autopsoy revealed the cause of death to be a roundhouse kick to the face. There is only one King. Chuck Norris was the fourth Wiseman. He brought baby Jesus the gift of “beard”. Jesus wore it proudly to his dying day. The other Wisemen, jealous of Jesus’ obvious gift favoritism, used their combined influence to have Chuck omitted from the Bible. Shortly after all three died of roundhouse kick related deaths.', '6 The Great Wall of China was originally created to keep Chuck Norris out. It failed misserably. Chuck Norris can touch MC Hammer. Chuck Norris made Ellen Degeneres straight. Chuck Norris found out about Conan O\'Brien\'s lever that shows clips from "Walker: Texas Ranger" and is working on a way to make it show clips of Norris having sex with Conan\'s wife. Chuck Norris put humpty dumpty back together again, only to roundhouse kick him in the face. Later Chuck dined on scrambled eggs with all the king\'s horses and all the king\'s men. The king himself could not attend for unspecified reasons. Coincidentally, the autopsoy revealed the cause of death to be a roundhouse kick to the face. There is only one King. Chuck Norris once went to a frat party, and proceeded to roundhouse every popped collar in sight. He then trank three kegs and shat on their floor, just because he\'s Chuck Norris.', '7 Chuck Norris isn’t lactose intolerant. He just doesn’t put up with lactose’s sh*t. Ironically, Chuck Norris’ hidden talent is invisibility. Scientists in Washington have recently conceded that, if there were a nuclear war, all that would remain are cockroaches and Chuck Norris. In the original pilot for Star Trek Next Generation, Chuck Norris can be seen powering the USS Enterprise warp drive with his roundhouse kicks. If you have five dollars and Chuck Norris has five dollars, Chuck Norris has more money than you. If Chuck Norris is late, time better slow the f*ck down.', '8 Chuck Norris\' iPod came with a real charger instead of just a USB cord When Chuck Norris had surgery, the anesthesia was applied to the doctors. Although it is not common knowledge, there are actually three sides to the Force: the light side, the dark side, and Chuck Norris. Chuck Norris once threated to sue Burger King because they refused to make it his way. When asked what “his way” detailed, he replied: “with barbed wire and nails, of course”. He then roundhouse kicked the reporter for even asking. In fine print on the last page of the Guinness Book of World Records it notes that all world records are held by Chuck Norris, and those listed in the book are simply the closest anyone else has ever gotten. God offered Chuck Norris the gift to fly, which he swiftly declined for super strength roundhouse ability. Chuck Norris found out about Conan O\'Brien\'s lever that shows clips from "Walker: Texas Ranger" and is working on a way to make it show clips of Norris having sex with Conan\'s wife. Chuck Norris once commented, "There are few problems in this world that cannot be solved by a swift roundhouse kick to the face. In fact, there are none."Chuck Norris once ate an entire ream of rice paper and shat out origami swans and Mister Miyagi from Karate Kid. When you open a can of whoop-ass, Chuck Norris jumps out. Chuck Norris eats transformer toys in vehicle mode and poos them out transformed into a robot.', '8 Chuck Norris once ate three 72 oz. steaks in one hour. He spent the first 45 minutes having sex with his waitress. When Chuck Norris was denied a Bacon McMuffin at McDonalds because it was 10:35, he roundhouse kicked the store so hard it became a KFC. Multiple people have died from Chuck Norris giving them the finger. Chuck Norris used live ammunition during all shoot-outs. When a director once said he couldn’t, he replied, “Of course I can, I’m Chuck Norris,” and roundhouse kicked him in the face. Chuck Norris does not use spell check. If he happens to misspell a word, Oxford will simply change the actual spelling of it. .Make your own on ChuckIpsum.com', '9 Chuck Norris is Luke Skywalker’s real father. China was once bordering the United States, until Chuck Norris roundhouse kicked it all the way through the Earth. A Handicap parking sign does not signify that this spot is for handicapped people. It is actually in fact a warning, that the spot belongs to Chuck Norris and that you will be handicapped if you park there. Crop circles are Chuck Norris\' way of telling the world that sometimes corn needs to lie the f*ck down. Filming on location for Walker: Texas Ranger, Chuck Norris brought a stillborn baby lamb back to life by giving it a prolonged beard rub. Shortly after the farm animal sprang back to life and a crowd had gathered, Chuck Norris roundhouse kicked the animal, breaking its neck, to remind the crew once more that Chuck giveth, and the good Chuck, he taketh away. Chuck Norris always has sex on the first date. Always. Once a grizzly bear threatened to eat Chuck Norris. Chuck showed the bear his fist and the bear proceeded to eat himself, because it would be the less painful way to die. Chuck Norris\' evil twin brother, Richard Simmons, once approached Chuck with the hope of reconciliation, but at the sight of Richard\'s curly, well kept hair, Chuck Norris became so enraged that he turned green with hate and ripped Richard Simmons arms and legs off.', '10 This action was the origin of the Marvel Comic badass, The Incredible Hulk. Chuck Norris put humpty dumpty back together again, only to roundhouse kick him in the face. Later Chuck dined on scrambled eggs with all the king\'s horses and all the king\'s men. The king himself could not attend for unspecified reasons. Coincidentally, the autopsoy revealed the cause of death to be a roundhouse kick to the face. There is only one King. Chuck Norris built a time machine and went back in time to stop the JFK assassination. As Oswald shot, Chuck Norris met all three bullets with his beard, deflecting them. JFK\'s head exploded out of sheer amazement. If you have five dollars and Chuck Norris has five dollars, Chuck Norris has more money than you. Chuck Norris found out about Conan O\'Brien\'s lever that shows clips from "Walker: Texas Ranger" and is working on a way to make it show clips of Norris having sex with Conan\'s wife. Chuck Norris once tried to wear glasses. The result was him seeing around the world to the point where he was looking at the back of his own head. Chuck Norris eats transformer toys in vehicle mode and poos them out transformed into a robot. Chuck Norris built a time machine and went back in time to stop the JFK assassination. As Oswald shot, Chuck Norris met all three bullets with his beard, deflecting them. JFK\'s head exploded out of sheer amazement.');
    $A = $names[ mt_rand( 0, count($names) - 1) ];
    $ipsumlorem .= $A;
    $ipsumlorem ="<article><p>" . $ipsumlorem . "</p></article> \n";
    return $ipsumlorem;
}
function generate_emails() {
    $email = '';
    $names = array ('Annabel', 'Asher', 'Atticus', 'August', 'Butch', 'Clementine', 'Daisy', 'Dashiell', 'Delilah', 'Dexter', 'Dixie', 'Duke', 'Edie', 'Elvis', 'Flora', 'Frances', 'Frank', 'Georgia', 'Gus', 'Hazel', 'Homer', 'Hopper', 'Hudson', 'Hugo', 'Ike', 'India', 'Ione', 'Iris', 'Isla', 'Ivy', 'June', 'Kai', 'Kingston', 'Lennon', 'Leonora', 'Leopold', 'Levi', 'Lila', 'Lionel', 'Lola', 'Luca', 'Lulu', 'Magnus', 'Mamie', 'Matilda', 'Millie', 'Milo', 'Minnie', 'Moses', 'Olive', 'Orson', 'Oscar', 'Otis', 'Pearl', 'Piper', 'Poppy', 'Ray', 'Roman', 'Romy', 'Roscoe', 'Ruby', 'Rufus', 'Sadie', 'Scarlett', 'Sebastian', 'Stella', 'Stellan', 'Sullivan', 'Talullah', 'Theo', 'Violet');
    $extensions = array('.be', '.biz', '.ch', '.com', '.co', '.co.uk', '.de', '.es', '.eu', '.fr', '.gr', '.im', '.info', '.io', '.it', '.lu', '.lt', '.me', '.mobi', '.mx', '.net', '.nl', '.org', '.pro', '.pt', '.re', '.ru', '.se', '.tel', '.tv', '.aero', '.biz', '.com', '.coop', '.info', '.mobi', '.name', '.net', '.org', '.pro', '.tel', '.travel', '.xxx', '.ag', '.ar.com', '.br.com', '.bz', '.ca', '.cc', '.co', '.gd', '.gs', '.gy', '.hn', '.ht', '.la', '.lc', '.ms', '.mx', '.pe', '.pm', '.qc.com', '.sx', '.tc', '.us', '.us.com', '.us.org', '.uy.com', '.vc', '.vg', '.at', '.be', '.cat', '.ch', '.co.uk', '.com.de', '.de', '.de.com', '.dk', '.es', '.eu', '.eu.com', '.fi', '.fr', '.gb.com', '.gb.net', '.gg', '.gr', '.gr.com', '.hu.com', '.hu.net', '.im', '.it', '.je', '.li', '.lt', '.lu', '.lv', '.me', '.me.uk', '.nl', '.no', '.no.com', '.nu', '.org.uk', '.pl', '.pt', '.ro', '.ru', '.ru.com', '.se', '.se.com', '.se.net', '.uk.com', '.uk.net', '.ru', '.ae.org', '.af', '.am', '.asia', '.cn', '.cn.com', '.cx', '.fm', '.hk', '.in', '.in.net', '.io', '.jp', '.jp.net', '.jpn.com', '.ki', '.kr.com', '.mn',    '.nf', '.nz', '.ph', '.pw', '.sa.com', '.sb', '.tl', '.tv', '.tw', '.wf', '.ws', '.cm', '.mg', '.mu', '.re', '.sc', '.so', '.tf', '.yt', '.za', '.za.com' );
    $DomainPartA = array('Babble', 'Buzz', 'Blog', 'Blue', 'Brain', 'Bright', 'Browse', 'Bubble', 'Chat', 'Chatter', 'Dab', 'Dazzle', 'Dev', 'Digi', 'Edge', 'Feed', 'Five', 'Flash', 'Flip', 'Gab', 'Giga',  'Inno', 'Jabber', 'Jax', 'Jet', 'Jump', 'Link', 'Live', 'My', 'N', 'Photo', 'Pod', 'Real', 'Riff', 'Shuffle', 'Snap', 'Skip', 'Tag', 'Tek', 'Thought', 'Top', 'Topic', 'Twitter', 'Word', 'You', 'Zoom');
    $DomainPartB = array( 'bean', 'beat', 'bird', 'blab', 'box', 'bridge', 'bug', 'buzz', 'cast', 'cat', 'chat', 'club', 'cube', 'dog', 'drive', 'feed', 'fire', 'fish', 'fly', 'ify', 'jam', 'links', 'list', 'lounge', 'mix', 'nation', 'opia', 'pad', 'path', 'pedia', 'point', 'pulse', 'set', 'space', 'span', 'share', 'shots', 'sphere', 'spot', 'storm',  'ster', 'tag', 'tags', 'tube', 'tune', 'type', 'verse', 'vine', 'ware', 'wire', 'works', 'XS', 'Z', 'zone', 'zoom' );
    $DomainPartC = array('Ai', 'Aba', 'Agi', 'Ava', 'Cami', 'Centi', 'Cogi', 'Demi', 'Diva', 'Dyna', 'Ea', 'Ei', 'Fa', 'Ge', 'Ja', 'I', 'Ka', 'Kay', 'Ki', 'Kwi', 'La', 'Lee', 'Mee', 'Mi', 'Mu', 'My', 'Oo', 'O', 'Oyo', 'Pixo', 'Pla', 'Qua', 'Qui', 'Roo', 'Rhy', 'Ska', 'Sky', 'Ski', 'Ta', 'Tri', 'Twi', 'Tru', 'Vi', 'Voo', 'Wiki', 'Ya', 'Yaki', 'Yo', 'Za', 'Zoo');
     $DomainPartD = array('ba', 'ble', 'boo', 'box', 'cero', 'deo', 'del', 'do', 'doo', 'gen', 'jo', 'lane', 'lia', 'lith', 'loo', 'lium', 'mba', 'mbee', 'mbo', 'mbu', 'mia', 'mm', 'nder', 'ndo', 'ndu', 'noodle', 'nix', 'nte', 'nti', 'nu', 'nyx', 'pe', 're', 'ta', 'tri', 'tz', 'va', 'vee', 'veo', 'vu', 'xo', 'yo', 'zz', 'zzy', 'zio', 'zu'); 
    $rand = mt_rand( 0, 5 );
    $A = "";
    $B = "";
    $name = "";
    Switch ($rand) {
		case 0:
                            $A = $names[ mt_rand( 0, count($names) - 1) ];
                            $B = $DomainPartA[ mt_rand( 0, count($DomainPartA) - 1) ];
                            break;
                    case 1:
                            $A = $names[ mt_rand( 0, count($names) - 1) ];
                            $B = $DomainPartC[ mt_rand( 0, count($DomainPartC) - 1) ];
                            break;
                    case 2:
                            $A = $names[ mt_rand( 0, count($names) - 1) ];
                            $B = $names[ mt_rand( 0, count($names) - 1) ];
                            break;
                    case 3:
                            $A = $names[ mt_rand( 0, count($names) - 1) ];
                            break;
                    case 4:
                            $A = $DomainPartA[ mt_rand( 0, count($DomainPartA) - 1) ];
                            break;
                    case 5:
                            $A = $DomainPartC[ mt_rand( 0, count($DomainPartC) - 1) ];
                            break;
        }
            If ($B != ""){
                   $rand = mt_rand( 0, 1 );
                   
                   If ($rand == 0){
                            $email = $A . '.' . $B;
                            $name = $A . ' ' . $B;
                   }
                    else {
                            $email = $B . '.' . $A;
                            $name = $B . ' ' . $A;
                   }
            }
            else {
                   $email = $A;
                   $B = $names[ mt_rand( 0, count($names) - 1) ];
                   $name = $B . ' ' . $A;
            }
        $rand = mt_rand( 0, 3 );
        Switch ($rand) {
                   case 0:
                            $A = $DomainPartA[ mt_rand( 0, count($DomainPartA) - 1) ];
                            $B = $DomainPartB[ mt_rand( 0, count($DomainPartB) - 1) ];
                            break;
                   case 1:
                            $A = $DomainPartC[ mt_rand( 0, count($DomainPartC) - 1) ];
                            $B = $DomainPartD[ mt_rand( 0, count($DomainPartD) - 1) ];
                            break;
                   case 2:
                            $A = $DomainPartA[ mt_rand( 0, count($DomainPartA) - 1) ];
                            $B = $DomainPartD[ mt_rand( 0, count($DomainPartD) - 1) ];
                            break;
                   case 3:
                            $A = $DomainPartC[ mt_rand( 0, count($DomainPartC) - 1) ];
                            $B = $DomainPartB[ mt_rand( 0, count($DomainPartB) - 1) ];
                            break;
        }
    $email .= '@';
    $email .= $A . $B;
    $email .= $extensions[ mt_rand( 0, count($extensions) - 1) ];
    $email  = $name. ' <a href="mailto:' . $email . '">' . $email . "</a> ";
    return $email;
    }
echo "<html lang='en'><head><meta charset='utf-8' /><title>Articles and comments</title><meta name='description' content='In the original pilot for Star Trek Next Generation, Chuck Norris can be seen powering the USS Enterprise warp drive with his roundhouse kicks. If you have five dollars and Chuck Norris has five dollars, Chuck Norris has more money than you. If Chuck Norris is late, time better slow the f*ck down'><meta name='author' content='Chuck Norris - le grand méchant loup'><meta name='viewport' content='width=device-width, user-scalable=yes'><body><section id='posts'>";
echo $page . "</section><footer id='footer'>C'est cadeau !</footer></article></body></html>";
?>