SELECT id, `role`, name, username, password, email, address, contact, verified, deleted
FROM ftlpzwfr_food.users;

SELECT id, wallet_id, `number`, cvv, balance
FROM ftlpzwfr_food.wallet_details;

SELECT id, customer_id FROM ftlpzwfr_food.wallet;


SELECT Balance
FROM ftlpzwfr_food.wallet
join ftlpzwfr_food.wallet_details on wallet.ID = wallet_details.wallet_id
join ftlpzwfr_food.users on users.id = wallet.customer_id  
where ftlpzwfr_food.users.username = 'user1';
