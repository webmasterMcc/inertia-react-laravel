import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'
import {Head, useForm, usePage} from "@inertiajs/react";
import React, {useState} from "react";

function NewUser({users}) {
    // const [name , setName]         = useState('') ;
    // const [email , setEmail]       = useState('') ;
    // const [password , setPassword] = useState('') ;

    //console.log(users)

   //const {csrf_token } = usePage() ;

    const {data, setData, post, processing, errors} = useForm({
        name: '',
        email: '',
        password: '',
    });
    let handleChange  = (e) => {
        const {name,value} = e.target ;
        setData(name,value) ;
      //  setData(e.target.name, e.target.value);
    }
    let submitNewCustomer = (e)  =>{
        e.preventDefault()

        // const formData = new FormData();
        // formData.append('name', name)
        // formData.append('email', email)
        // formData.append('password', password)

        console.dir(data)

        post(route('createUser'))
    }
   const btnClass = 'inline-block rounded bg-red-500 px-4 py-2 text-xs font-medium text-white hover:bg-red-700'
    return (
        <>
            <AuthenticatedLayout
            user={users}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">User Management</h2>}
        >
            <Head title="Users" />
            <div>
                <h1>New User Information</h1>
                <form onSubmit={submitNewCustomer}>

                    <p>name</p>

                    <input type='text' name="name" onChange={handleChange} value={data.name} id='name'/>
                    <p>email</p>
                    <input type='email' name="email" onChange={handleChange} value={data.email} id='email'/>
                    <p>password</p>
                    <input type='password' name="password" onChange={handleChange} value={data.password} id='password'/>
                    <p></p>
                    <button type="submit" className={btnClass} disabled={processing}>
                        {processing ? 'Processing...' : 'Submit'}
                    </button>
                </form>
            </div>
            </AuthenticatedLayout>
        </>
    )
}

export default NewUser
