import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'
import {Head, useForm, usePage} from "@inertiajs/react";
import React, {useState} from "react";

function NewUser({users}) {


    const {data, setData, post, processing, errors} = useForm({
        name: '',
        email: '',
        password: '',
    });
    let handleChange  = (e) => {
        // const {name,value} = e.target ;
        // setData(name,value) ;
       setData(e.target.name, e.target.value);
    }
    let submitNewCustomer = (e)  =>{
        e.preventDefault()
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
                <Head title="Users"/>


                <div className="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8">
                    <div className="sm:mx-auto sm:w-full sm:max-w-sm">
                        <img
                            alt="Your Company"
                            src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                            className="mx-auto h-10 w-auto"
                        />
                        <h2 className="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">
                           Create new user
                        </h2>
                    </div>

                    <div className="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                        <form onSubmit={submitNewCustomer} className="space-y-6">
                            <div>
                                <div className="flex items-center justify-between">
                                <label htmlFor="name" className="block text-sm/6 font-medium text-gray-900">
                                    name
                                </label>
                            </div>
                                <div className="mt-2">
                                    <input
                                        type='text'
                                        name="name"
                                        onChange={handleChange}
                                        value={data.name}
                                        id='name'
                                        placeholder="name"
                                        className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                                    />
                                </div>
                            </div>

                            <div className='m-0'>
                                <div className="flex items-center justify-between">
                                    <label htmlFor="password" className="block text-sm/6 font-medium text-gray-900">
                                        email
                                    </label>
                                </div>
                                <div className="mt-2">
                                    <input
                                        type='email'
                                        name="email"
                                        onChange={handleChange}
                                        value={data.email}
                                        placeholder="email"
                                        id='email'
                                        className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                                    />
                                </div>
                                <div className="flex items-center justify-between">
                                    <label htmlFor="password" className="block text-sm/6 font-medium text-gray-900">
                                        password
                                    </label>
                                </div>
                                <div className="mt-2">
                                    <input
                                        type='password'
                                        name="password"
                                        onChange={handleChange}
                                        value={data.password}
                                        id='password'
                                        className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                                    />
                                </div>
                            </div>

                            <div>
                                <button type="submit" className={btnClass} disabled={processing}
                                        className="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    {processing ? 'Processing...' : 'Submit'}
                                </button>
                            </div>
                        </form>

                    </div>
                </div>


                {/*<div>*/}
                {/*    <h1>New User Information</h1>*/}

                {/*    <form onSubmit={submitNewCustomer}>*/}

                {/*        <p>name</p>*/}

                {/*        <input type='text' name="name" onChange={handleChange} value={data.name} id='name' />*/}
                {/*        <p>email</p>*/}
                {/*        <input type='email' name="email" onChange={handleChange} value={data.email} id='email'/>*/}
                {/*        <p>password</p>*/}
                {/*        <input type='password' name="password" onChange={handleChange} value={data.password} id='password' />*/}
                {/*        <p></p>*/}
                {/*        <button type="submit" className={btnClass} disabled={processing}>*/}
                {/*            {processing ? 'Processing...' : 'Submit'}*/}
                {/*        </button>*/}
                {/*    </form>*/}
                {/*</div>*/}
            </AuthenticatedLayout>


            <>


            </>


        </>
    )
}

export default NewUser
