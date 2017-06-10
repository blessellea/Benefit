Click here to reset your password: <a href="{{ $link = url('organizer/password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
