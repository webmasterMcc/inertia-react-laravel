import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.jsx";
import {Head, useForm} from "@inertiajs/react";
import React from "react";

const createPost = ({user , users}) => {
    const {data, setData, post, processing, errors} = useForm({
        title: '',
        description: '',
        author: '',
        image: '',
    });

    let handleChange  = (e) => {
        // const {name,value} = e.target ;
        // setData(name,value) ;
        setData(e.target.name, e.target.value);
    }
    let submitNewCustomer = (e)  =>{
        e.preventDefault()
        console.dir(data)

        post(route('blog.createNewPost'))
    }


    const btnClass = 'inline-block rounded bg-red-500 px-4 py-2 text-xs font-medium text-white hover:bg-red-700'
    return (
        <>


            <AuthenticatedLayout
                user={user}
                header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">create post</h2>}
            >
                <Head title="Users" />
                <div className="overflow-x-auto">
                    <h2 className='mt-6 text-2xl font-medium text-center'>Create New POST</h2>
                    <div className="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8">
                        <div className="sm:mx-auto sm:w-full sm:max-w-sm">
                            <img
                                alt="Your Company"
                                src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                                className="mx-auto h-10 w-auto"
                            />
                            <h2 className="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">
                                Create new Post
                            </h2>
                        </div>

                        <div className="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                            <form onSubmit={submitNewCustomer} className="space-y-6">
                                <div>
                                    <div className="flex items-center justify-between">
                                        <label htmlFor="title" className="block text-sm/6 font-medium text-gray-900">
                                            title
                                        </label>
                                    </div>
                                    <div className="mt-2">
                                        <input
                                            type='text'
                                            name="title"
                                            onChange={handleChange}
                                            value={data.title}
                                            id='title'
                                            placeholder="name"
                                            className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                                        />
                                    </div>
                                </div>

                                <div className='m-0'>
                                    <div className="flex items-center justify-between">
                                        <label htmlFor="description"
                                               className="block text-sm/6 font-medium text-gray-900">
                                            description
                                        </label>
                                    </div>
                                    <div className="mt-2">
                                        <input
                                            type='description'
                                            name="description"
                                            onChange={handleChange}
                                            value={data.description}
                                            placeholder="description"
                                            id='description'
                                            className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                                        />
                                    </div>
                                    <div className="flex items-center justify-between">
                                        <label htmlFor="author" className="block text-sm/6 font-medium text-gray-900">
                                            author
                                        </label>
                                    </div>
                                    <div className="mt-2">
                                        <input
                                            type='author'
                                            name="author"
                                            onChange={handleChange}
                                            value={data.author}
                                            placeholder='author'
                                            id='author'
                                            className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                                        />
                                    </div>
                                    <div className="flex items-center justify-between">
                                        <label htmlFor="image" className="block text-sm/6 font-medium text-gray-900">
                                            image
                                        </label>
                                    </div>
                                    <div className="mt-2">
                                        <input
                                            type='file'
                                            name="image"
                                            onChange={handleChange}
                                            value={data.image}
                                            id='image'
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
                </div>
            </AuthenticatedLayout>

        </>
    )
}
export default createPost;
