import React from 'react'
import { router } from '@inertiajs/react';

function SingleUser(user) {

    const handleBack = () => {
        router.visit(-1) ;
    }
    console.log(user)
    return (
        <div>
            hello Single {user.user.name}   , User id : {user.user.id}
            <p>..</p>
            <button onClick={handleBack}>Back</button>
        </div>
    )
}
export default  SingleUser
