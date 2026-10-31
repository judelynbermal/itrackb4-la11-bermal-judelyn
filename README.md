

## G1

I turned `category` into a table because it comes from a fixed list (Burger, Pasta, Seafood...) and the same values repeat across many foods. `restaurant` could also work, but category is the one my filter links are built around.

## G2

Screenshot 6 showed ___ queries: 1 to get all the foods, plus 1 per food to look up its category separately, because my view reads $item->category->name without with().

## G3

If `category()` on Food were plural (`categories()`), Eloquent would look for a column called `categories_id` on the foods table, which doesn't exist, so the relationship would fail.
