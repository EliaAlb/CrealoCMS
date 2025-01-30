<?php
require_once __DIR__ . '/../Auth0Service.php';
$auth0 = new Auth0Service();

// Überprüfe, ob bereits eingeloggt
$user = $auth0->getUser();
if ($user) {
    header('Location: /dashboard');
    exit();
}
?>
<!DOCTYPE html>
<html data-wf-page="66cc87062bcd9d178ab9f299" data-wf-site="66cc87062bcd9d178ab9f11c" lang="de">
<head>
    <!-- Bestehende Meta-Tags und CSS-Links bleiben gleich -->
    <?php include '../includes/head.php'; ?>
</head>
<body>
    <div data-w-id="42cec775-e6ca-8762-cd34-1c5d55bb5ed0" class="page-wrapper">
        <!-- Top Bar bleibt gleich -->
        
        <div class="dashboard-main-content utility-page">
            <div class="container-default w-container">
                <div class="module utility-page-form">
                    <div class="inner-container _444px text-center">
                        <!-- Login Form -->
                        <div class="inner-container _80px-mbl center">
                            <img src="../images/log-in-icon-dashboardly-webflow-template.svg" loading="eager" alt="" class="mg-bottom-20px">
                        </div>
                        <div class="heading-h3-size mg-bottom-8px">Willkommen zurück</div>
                        <p class="mg-bottom-24px">Melde dich an, um fortzufahren.</p>
                        
                        <!-- Auth0 Login Buttons -->
                        <div class="grid-1-column gap-row-12px mg-bottom-24px">
                            <!-- Google Login -->
                            <a href="<?php echo $auth0->login(['connection' => 'google-oauth2']); ?>" 
                               class="btn-secondary sign-in-button w-inline-block">
                                <div class="flex-horizontal">
                                    <img src="../images/google-button-icon-dashboardly-webflow-template.svg" 
                                         loading="eager" alt="Google Login" class="mg-right-8px">
                                    <div class="text-200 medium">Mit Google anmelden</div>
                                </div>
                            </a>
                            
                            <!-- Facebook Login -->
                            <a href="<?php echo $auth0->login(['connection' => 'facebook']); ?>" 
                               class="btn-secondary sign-in-button w-inline-block">
                                <div class="flex-horizontal">
                                    <img src="../images/facebook-button-icon-dashboardly-webflow-template.svg" 
                                         loading="eager" alt="Facebook Login" class="mg-right-8px">
                                    <div class="text-200 medium">Mit Facebook anmelden</div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="text-200 medium color-neutral-800">oder</div>
                        <div class="divider _24px"></div>
                        
                        <!-- Email/Password Login -->
                        <form action="<?php echo $auth0->login(); ?>" method="POST" class="form w-form">
                            <input type="email" class="input mg-bottom-16px w-input" 
                                   maxlength="256" name="email" placeholder="E-Mail-Adresse" required>
                            
                            <input type="password" class="input mg-bottom-16px w-input" 
                                   maxlength="256" name="password" placeholder="Passwort" required>
                            
                            <div class="flex justify-between align-center mg-bottom-16px">
                                <label class="w-checkbox checkbox-field">
                                    <input type="checkbox" name="remember" class="w-checkbox-input checkbox">
                                    <span class="text-200 medium color-neutral-700">Angemeldet bleiben</span>
                                </label>
                                <a href="/auth/forgot-password" class="text-200 medium color-neutral-800">
                                    Passwort vergessen?
                                </a>
                            </div>
                            
                            <button type="submit" class="btn-primary width-100 w-button">Anmelden</button>
                        </form>
                        
                        <!-- Sign Up Link -->
                        <div class="flex-horizontal flex-wrap mg-top-24px">
                            <div class="text-200 medium color-neutral-800">Noch kein Konto? </div>
                            <a href="/auth/signup" class="text-200 medium">Registrieren</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer bleibt gleich -->
    </div>
    
    <!-- JavaScript-Einbindungen bleiben gleich -->
    <?php include '../includes/scripts.php'; ?>
</body>
</html> 