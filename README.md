Library membership untuk laravel

## Fitures
* Packages
* Add users to packages
* Package transactions
* Membership expiration

## Instalasi
`composer require priana/membership`

<!-- `php artisan vendor:publish --provider="Laravel\Pennant\PennantServiceProvider"` -->

## Migration
`php artisan migrate`

## Add MBS to User Model

    use Priana\Membership\Traits\HasMembership;

    class User extends Authenticatable
    {
       use HasMembership;

## Get My Subscriptions

    use App\Models\User;
    use Priana\Membership\Models\MbsPackage;
    use Priana\Membership\Models\MbsSubscription;

    public function getMySubscriptions () {

        $user = \App\Models\User::find(2);
        $package = MbsPackage::find(1);

        MbsSubscription::addSubscription($user , $package);

        $my_subs = $user->subscriptions;

         return $my_subs;
    }

## Is User Has Active Subscriptions

    $user = \App\Models\User::find(288);
    $check_sub = $user->subscriptions()->active()->exists();

    you can add this code to your laravel policy or to create validation on your Controller