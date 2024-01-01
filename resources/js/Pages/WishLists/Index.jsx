import React from "react";
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import WishList from '@/Components/WishList';
import { Head } from "@inertiajs/react";

export default function Index({auth, wishlists}) {

    return (
        <AuthenticatedLayout auth={auth}>
            <Head title="Wish Lists"/>

            <div className="mt-6 bg-white shadow-sm rounded-lg divide-y">
                {wishlists.map(wishlist =>
                    <WishList key={wishlist.id} wishlist={wishlist}/>
                )}
            </div>
        </AuthenticatedLayout>
    )
}