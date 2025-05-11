<?php
$contact1_name = "";
$contact1_phone = "";
$contact2_name = "";
$contact2_phone = "";
$contact_count = 0;

while (true) {
    echo "\n--- Contact Manager ---\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Choose an option (1-3): ";

    $choice = trim(fgets(STDIN));

    if ($choice == "1") {
        if ($contact_count == 2) {
            echo "⚠️ You can only add up to 2 contacts.\n";
        } elseif ($contact_count == 0) {
            echo "Enter name 1: ";
            $contact1_name = trim(fgets(STDIN));
            echo "Enter phone number 1: ";
            $contact1_phone = trim(fgets(STDIN));
            $contact_count++;
            echo "✅ Contact added successfully.\n";
        } elseif ($contact_count == 1) {
            echo "Enter name 2: ";
            $contact2_name = trim(fgets(STDIN));
            echo "Enter phone number 2: ";
            $contact2_phone = trim(fgets(STDIN));
            $contact_count++;
            echo "✅ Contact added successfully.\n";
        }
    } elseif ($choice == "2") {
        echo "\n📇 Saved Contacts:\n";
        if ($contact_count == 0) {
            echo "No contacts found.\n";
        }
        if ($contact_count >= 1) {
            echo "1. $contact1_name - $contact1_phone\n";
        }
        if ($contact_count == 2) {
            echo "2. $contact2_name - $contact2_phone\n";
        }
    } elseif ($choice == "3") {
        echo "👋 Exiting Contact Manager. Goodbye!\n";
        break;
    } else {
        echo "❌ Invalid option. Please choose 1, 2, or 3.\n";
    }
}
