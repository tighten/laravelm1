
<style>
.live-blog li {
    border-bottom: 1px solid #ddd;
    display: block;
    margin-left: 8em;
    margin-bottom: 1em;
    padding-bottom: 1em;
}
.live-blog li span {
    color: #777;
    display: block;
    font-size: 0.75em;
    font-weight: bold;
    line-height: 1.3;
    margin-left: -9em;
    text-align: right;
    text-transform: uppercase;
    position: absolute;
    width: 7em;
}
</style>
    <h2>Testing on a brand new machine, having taken these steps:</h2>
    <ul class="live-blog">
        <li><span>Thursday mid-afternoon</span>Download iTerm</li>
        <li>Install oh-my-zsh, which prompted installing the command line developer tools</li>
        <li>Install oh-my-zsh again</li>
        <li>`sudo mkdir /usr/local/bin && chmod 775 /usr/local/bin` and hope that's not the wrong thing to do
        <li>Install composer and move to /usr/local/bin and wonder why i have to sudo it (`sudo mv composer.phar /usr/local/bin/composer`)</li>
        <li>Install the Laravel installer (`composer global update laravel/installer`)</li>
        <li>Use the installer (`mkdir ~/Sites && cd ~/Sites && laravel new m1suckazzzzzz`)</li>
        <li>Womp, no find Laravel, fix our Path. edit `~/.zshrc`, and add this line up top: `export PATH="$PATH:$HOME/.composer/vendor/bin"`</li>
        <li>Use the installer (`mkdir ~/Sites && cd ~/Sites && laravel new m1suckazzzzzz`)</li>
        <li>Read and consider this article: <a href="https://www.notion.so/Run-x86-Apps-including-homebrew-in-the-Terminal-on-Apple-Silicon-8350b43d97de4ce690f283277e958602">Run x86 Apps including homebrew on the Terminal on Apple Silicon</a>, then decide nope</li>
        <li id="blog-brew">Decide on this one instead: <a href="https://soffes.blog/homebrew-on-apple-silicon">Homebrew on Apple Silicon</a></li>
        <li><span>Thursday 12:18am</span>In iTerm, run: `arch -x86_64 /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"`. Get error: "arch: posix_spawnp: /bin/bash: Bad CPU type in executable" ... Googling, no luck. Gonna try again in the morning</li>
        <li>Stubborn. Stayed up. Found answer here: https://github.com/Homebrew/brew/issues/7857#issuecomment-729726634</li>
        <li>`/usr/sbin/softwareupdate --install-rosetta --agree-to-license`</li>
        <li>`arch -x86_64 /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"` YAY!</li>
        <li><span>Thursday 12:28am</span>A few errors... `get_owner:1: command not found: stat -f` happened twice. Hit the "Press RETURN to continue or " text.. hit return a few times, tried other keys, nothing's working. Gonna let it just run overnight I guess. 12:28am</li>
        <li>`composer require tightenco/lambo && cd ~/Sites && lambo mynewsite` .. works great ✓</li>
        <li><span>Thursday 12:36am</span>Tried to run the Brew installer. Hangs on "Press RETURN" again. 🤷‍♂️ Really to bed this time. 12:36am</li>
        <li><span>Thursday 7:30pm</span>Woke up to Jess Archer giving my sleep-addled brain the answer on my sudo permissions issue above, which was: you didn't chown /usr/local/bin, dummy!</li>
        <li>I think my problem with the Homebrew installer is probably because I created the /usr/local/bin directory first and it's farting out on it, so I'm going to try to change its permissions myself. Homebrew suggests I need to make it group writeable, make the group "admin", and make me the owner. I believe that's `sudo chown -R matthewstauffer:admin /usr/local/bin`, so let's try it!.. worked</li>
        <li>... but the Homebrew installer is still hanging. It feels like it's not actually getting my "RETURN" press? I'm going to download it, edit it, and see if that is indeed the problem. Looks like this RETURN prompt is only used once, and it makes me wonder whether it's having trouble reading my TTY input or whatever, so I'm replace the internals of the wait_for_user method with "echo 'yay'". So I created a local copy of the file, made that change, and now I'm running it myself... `arch -x86_64 /bin/bash installhomebrewh.sh`</li>
        <li>No errors on the installer!! Let's gooooooo</li>
        <li>Installed the latest macOS update which took several hours.</li>
        <li>Tried to use <code>git</code> and got this error: <code>xcrun: error: invalid active developer path (/Library/Developer/CommandLineTools), missing xcrun at: /Library/Developer/CommandLineTools/usr/bin/xcrun</code>... let's get to googling. Google says the gool 'ol <code>xcode-select --install</code>, which I could've swore I already did? But let's do it again.</li>
        <li>Hooray! Git works again! Now on to Homebrew; gonna run <code>brew update</code> but I have to remember to prefix it: <code>arch -x86_64 brew</code> which is a PITA so I'm gonna build a passthrough command <code>arm</code> that shortcuts that same thing.</li>
        <li>Gonna add this to my <code>.zshrc</code> and see how it treats me for creating basically an ARM repl... <br>
            <code>
            arm () {
    while read -ra c; do
        arch -x86_64 "${c[@]}"
    done
}
    </code>.. womp that didn't work oh well</li>
        <li>Huh. in my zshrc I see this flag commented out: <code>export ARCHFLAGS="-arch x86_64"</code>.. think i'm gonna uncomment that.</li>
        <li>OK, let's try it the old way. `arch -x86_64 bash update`</li>
        <li>UGHHH shoot me... back to good old <code>arch: posix_spawnp: brew: bad CPU type in executable</code>. WTF?! <code>/usr/sbin/softwareupdate --install-rosetta --agree-to-license</code> again I guess?</li>
        <li>HEYYY it's doing something...</li>
        <li><code>arch -x86_64 brew install php</code></li>
        <li>
            <code>Warning: You are using macOS 11.0.
We do not provide support for this released but not yet supported version.
You will encounter build failures with some formulae.
Please create pull requests instead of asking for help on Homebrew's GitHub,
Twitter or any other official channels. You are responsible for resolving
any issues you experience while you are running this
released but not yet supported version.
</code>
</li>
        <li>PHP installed!</li>
        <li><code>brew services start php</code> worked!</li>
        <li><span>Thursday 1:30pm</span>Meetings.. back later</li>
        <li><span>Thursday 5:19pm</span> OK, let's go. I read the output of this blogging format and I hate it so I'm gonna fix it quickly before I get back to M1.</li>
        <li><span>Thursday 5:44PM</span>OK, spent literally 30 minutes tweaking the blog. Let's get to Valet. <code>composer global require laravel/valet</code></li>
        <li>Install worked with no errors. <code>valet install</code> let's go... asks for my password, gonna CTRL-C out and see if <code>valet trust</code> works on M1/Big Sur... uhhhh.. trust is not defined? Didn't I write the freaking command? It's in the docs... well.. this is not a good sign for Valet. Gonna try Valet install without running valet trust.</li>
        <li>... so valet install is working but not valet trust? Valet installed successfully</li>
        <li>Ahh. you can't run trust until you've run install. False alarm! Valet's installed. Let's try parking.</li>
        <li><code>cd Sites && valet park</code>.. boom. Let's make a site with Lambo and try it out!</li>
        <li><code>cd Sites && lambo yourBestSiteNow</code>.... let's goooo... and we're serving from yourbestsitenow.test!</li>
        <li id="blog-valet-share">Let's try <code>valet share</code> now. Hm.. it's showing the session, but when requests are made they're getting 404 (served by Valet!) instead of the right stuff. I'm gonna call Valet Share not working right now.</li>
        <li id="blog-redis"><span>Thursday 6:06PM</span> OK, let's do some Redis! Then I need dinner.</li>
        <li><code>arch -x86_64 brew install redis && brew services start redis</code></li>
        <li>Time to download TablePlus and see if it works. Their site only says 10.11+ so it's not officially supported... looks good so far! Creating a new Redis connection... Error <code>setsockopt(SO_RCVTIMEO) Invalid argument</code>. That may be a Redis thing, or a TablePlus thing, <em>or</em> me just putting the details in wrong. Let me check my main computer's TablePlus. Nope, same settings. OK, let's test Redis somewhere else so we can figure out if the problem is Redis or TablePlus.</li>
        <li>Let's just see if Redis is even running. <code>redis-cli ping</code> NOPE. OK. Homebrew *did* say it successfully started Redis. Let's see if running the start command under the different architecture matters. <code>arch -x86_64 brew services start redis</code>... says it's already started. stopped and restarted it... Still this: <code>Could not connect to Redis at 127.0.0.1:6379: Connection refused</code>
        <li>I'm gonna say Homebrew Redis isn't working out of the box. I'll uninstall it and try non-Homebrew. Following this: https://phoenixnap.com/kb/install-redis-on-mac (Option 2)</li>
        <li>After running `make` I see "/bin/sh: pk-config: command not found" a few times. Not a good sign!</li>
        <li><code>make test</code> .. as the output flies by I see that same error several times...</li>
        <li><span>Thursday 6:17PM</span>While this runs I'm gonna go eat.</li>
        <li><span>Thursday 7:11PM</span>All tests passed without errors!</li>
        <li>... ran `sudo make install` and it gave an error and then output <code>INSTALL install</code> five times.... did that.. do anything? I feel like a Linux user right now.</li>
        <li>Read the README... OK, so this was supposed to put it in the /usr/local/bin. Let's check!</li>
        <li>... OK, yah it is there. Thought I checked but I guess I hadn't. Let's try! <code>redis-cli ping</code>... UGH. Same problem as with Homebrew. So there's something not working. Maybe debug-able? But not for me tonight.</li>
        <li><span>Thursday 7:26PM</span> Let's try... some downloadable apps! Sublime Text is up first.</li>
        <li>Downloading build 3211... works like a charm!</li>
        <li>PHPStorm says they work ("Our IDEs work on Apple Silicon chips through Rosetta 2.") so I'm gonna move on to things that haven't made official statements yet.</li>
        <li>Let's try MySQL, PostgreSQL, and Memcached!</li>
        <li>Oops, got distracted watching my brother's live show. TAKE TWO. MySQL.</li>
        <li><span>Thursday 8:11PM</span>MySQL. <code>arch -x86_64 brew install mysql && brew services start mysql</code></li>
        <li>Tested it out, and we have a functioning local <code>mysql</code>, I can access it from TablePlus, and my Laravel app is integrating with it.</li>
        <li><span>Thursday 9:10PM</span>OK, let's check out Postgres. I made a <a href="https://twitter.com/stauffermatt/status/1329598260076572673">nice little shortcut</a> in my <code>.zshrc</code> that lets me write just <code>arm brew install whatever</code>, so future writing here will just show <code>arm</code>.</li>
        <li><code>arm brew install postgresql && brew services start postgresql</code>... that worked!</li>
        <li>The way I connected to Postgres on TablePlus doesn't work unless there's a database table named the same as my computer user, and since I didn't feel like taking the time to figure out why, I just ran <code>psql postgres</code> and in that REPL I wrote <code>CREATE DATABASE matthewstauffer;</code> and then hit enter. Once that was done, I could connect to this Postgres database using the default settings from TablePlus. Good to go!</li>
        <li>OK, just checked out a ton of GUI apps that all work fine. Gonna call it for a while.</li>
        <li><span>Thursday 10:13PM</span>Lied. Tried OBS. Doesn't work.</li>
    </ul>
