import { Link } from '@inertiajs/react';
import React, { useState , useEffect } from 'react'

 const FetchDataLuxInstagram =   ({loaderData}) => {
    const [data , setData] = useState([]) ;
    const [loading, setLoading] = useState(true); // To manage loading state

    // console.log(loaderData)
    const loadDATA =  async () => {
        try {
            let res = await loaderData;
            setData(res) ;
            setLoading(false) ;  // Loading state is set to false after successful data retrieval
            console.log(res)


        } catch (error) {
            console.error("Error fetching data:", error);
            setLoading(false); // Stop loading even if an error occurs
        }

    } ;

// Fetch data when the component mounts
useEffect(() => {
    loadDATA();
  }, []);

  return (
    <>

      {loading ? <p>Loading...</p> :

    (
        <div className="bg-turquoise">
        <h1>Instagram LuxMarble</h1>
         <div className="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
           <h2 className="text-2xl font-bold tracking-tight text-yellow-200">Customers also purchased</h2>

           <div className="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8"></div>
      {/* <p>Data loaded: {JSON.stringify(data)}</p> */}

            {/*{data.data.map( e => {*/}
            {/*    if(e.media_type === 'IMAGE') {*/}
            {/*        return (*/}

            {/*            <div className="group relative">*/}
            {/*            <Link href={e.media_url} >*/}
            {/*           <div className="aspect-h-1 aspect-w-1 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">*/}
            {/*             <img src={e.media_url}*/}
            {/*             alt={e.id}*/}
            {/*             className="h-full w-full object-cover object-center lg:h-full lg:w-full"*/}
            {/*             data-id={e.id} />*/}
            {/*           </div>*/}
            {/*           <div className="mt-4 flex justify-between">*/}
            {/*             <div>*/}
            {/*                   <span aria-hidden="true" class="absolute inset-0"></span>*/}
            {/*                   {e.media_type}*/}


            {/*               <p className="mt-1 text-sm text-gray-500"> {e.media_product_type}</p>*/}
            {/*             </div>*/}
            {/*             <p className="text-sm font-medium text-gray-900">{e.id}</p>*/}
            {/*           </div>*/}
            {/*            </Link>*/}
            {/*         </div>*/}
            {/*          )*/}
            {/*        }*/}


            {/*})}*/}

             { data.map((e) => {
                 return (
                     <p>{e.title}</p>
                 )
             })}


      </div>

        </div>

    )

 }
 </>

  );
}



export default FetchDataLuxInstagram ;
