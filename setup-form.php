<div class="app-card">
    <div class="logo-container">
        <img src="./images/arc.svg" alt="logo"/>
    </div>
    <h2 class="centered-text">Set Arc Credentials</h2>
    <p class="centered-text">This will be the master credential to access the Arc service. You can change them later.</p>
    <form method="post" action="post-setup.php" class="pure-form pure-form-stacked">
        <label for="username">Username</label>
        <input required class="pure-input-1" name="username" id="username" type="text" placeholder="Username" value="<?=$username?>" />
        <label for="password">Password</label>
        <input required class="pure-input-1" name="password" id="password" type="password" placeholder="Password" value="<?=$password?>"/>
        <button type="submit" class="pure-button pure-button-primary">Continue</button>
    </form>
    <br />
</div>
