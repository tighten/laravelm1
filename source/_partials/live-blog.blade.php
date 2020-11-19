
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
        <li>Decide on this one instead: <a href="https://soffes.blog/homebrew-on-apple-silicon">Homebrew on Apple Silicon</a></li>
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
        <li>Tried to use `git` and got this error: `xcrun: error: invalid active developer path (/Library/Developer/CommandLineTools), missing xcrun at: /Library/Developer/CommandLineTools/usr/bin/xcrun`... let's get to googling. Google says the gool 'ol `xcode-select --install`, which I could've swore I already did? But let's do it again.</li>
        <li>Hooray! Git works again! Now on to Homebrew; gonna run `brew update` but I have to remember to prefix it: `arch -x86_64 brew` which is a pita so I'm gonna build a passthrough command `arm` that shortcuts that same thing.</li>
        <li>Gonna add this to my `.zshrc` and see how it treats me for creating basically an ARM repl... <br>
            <code>
            arm () {
    while read -ra c; do
        arch -x86_64 "${c[@]}"
    done
}
    </code>.. womp that didn't work oh well</li>
        <li>Huh. in my zshrc I see this flag commented out: `export ARCHFLAGS="-arch x86_64"`.. think i'm gonna uncomment that.</li>
        <li>OK, let's try it the old way. `arch -x86_64 bash update`</li>
        <li>UGHHH shoot me... back to good old `arch: posix_spawnp: brew: bad CPU type in executable`. WTF?! `/usr/sbin/softwareupdate --install-rosetta --agree-to-license` again I guess?</li>
        <li>HEYYY it's doing something...</li>
        <li>`arch -x86_64 brew install php`</li>
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
        <li>`brew services start php` worked!</li>
        <li><span>Thursday 1:30pm</span>Meetings.. back later</li>
        <li><span>Thursday 5:19pm</span> OK, let's go. I read the output of this blogging format and I hate it so I'm gonna fix it quickly before I get back to M1.</li>
        <li><span>Thursday 5:44PM</span>OK, spent literally 30 minutes tweaking the blog. Let's get to Valet. `composer global require laravel/valet`</li>
    </ul>
