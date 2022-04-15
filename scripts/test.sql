create trigger trigger_insert_lower_cached_first_name
    before insert
    on cache_first_names for each row
    set NEW.content = lower(NEW.content);
    delimiter;

create trigger trigger_update_lower_cached_first_name
    before update
    on cache_first_names for each row
    set NEW.content = lower(NEW.content);
    delimiter;