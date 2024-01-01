import React from "react";

export default function WishList({wishlist}) {
    console.log(wishlist);
    return (
        <div className="p-6 flex space-x-2">
            <div className="flex-1">
                <div className="flex justify-between items-center">
                    <div>
                        <span>{wishlist?.user.name}</span>
                        <small>{new Date(wishlist.created_at).toLocaleString()}</small>
                    </div>
                </div>
                <h2>
                    {wishlist?.name}
                </h2>
                <small>{new Date(wishlist.expiration).toLocaleString()}</small>
            </div>
        </div>
    )
}